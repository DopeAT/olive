<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmation;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Omnipay\Omnipay;

class PaymentController extends Controller
{

    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(getenv('STRIPE_SECRET_KEY'));

            $token = $request->input('stripeToken');

            $response = $gateway->purchase([
                'amount' => $request->input('amount'),
                'currency' => 'eur',
                'token' => $token,
            ])->send();

            if($response->isSuccessful()) {
                $arr_payment_data = $response->getData();
                $payment = null;
                $order = null;

                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();

                if (!$isPaymentExist) {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = $arr_payment_data['currency'];
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();

                    Order::create([
                        'payment_id' => $payment->payment_id,
                        'order_full_name' => $request->input('cardName'),
                        'order_email' => $payment->payer_email,
                        'order_phone' => $request->input('phone'),
                        'order_address' => $request->input('address'),
                        'products' => json_encode($request->input('products')),
                        'status' => $payment->payment_status,
                        'is_new' => 1,
                    ]);

                    $order = Order::where('payment_id', $payment->payment_id)
                        ->first()
                        ->load('payment');
                }

                Mail::to($request->input('email'))->send(new OrderConfirmation($order, $payment));

                return response()->json([
                    'info' => [
                        'success' => true,
                        'status'  => 200,
                        'message' => "Your payment has been successful. Your payment id is: ". $arr_payment_data['id'] .". Thank you for your order"
                    ],
                    'data' => [
                        'payment' => $payment,
                        'order' => $order,
                    ]
                ]);
            } else {
                return response()->json([
                    'info' => [
                        'success' => false,
                        'status'  => 500,
                        'message' => $response->getMessage()
                    ],
                    'data' => []
                ]);
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                'currency' => 'gbp',
                'token' => $token,
            ])->send();

            if($response->isSuccessful()) {
                $arr_payment_data = $response->getData();

                return response()->json([
                    'info' => [
                        'success' => true,
                        'status'  => 200,
                        'message' => 'Success'
                    ],
                    'data' => []
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

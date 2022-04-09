<?php

namespace App\Mail;

use App\Order;
use App\Payer;
use App\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Config;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    private $order;
    private $payment;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     * @param Payment $payment
     */
    public function __construct(Order $order, Payment $payment)
    {
        $this->order   = $order;
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'payment' => $this->payment,
            'order' => $this->order,
        ];

        $locale = Config::get('app.locale');
        $pdf = PDF::loadView('pdf.order_'.$locale, $data);


        return $this->from(env('INFO_EMAIL', 'info@olivepower.eu'), 'Olive Power')
            ->subject('Order Confirmation')
            ->attachData($pdf->output(), 'Order_Details.pdf', [
                'mime' => 'application/pdf',
            ])
            ->view('emails.order.success', [
                'order'   => $this->order,
                'payment' => $this->payment,
            ]);
    }
}

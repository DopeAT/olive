<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = Config::get('app.locale');

        return view("web.home." . $locale, [
        'olive' => $this->olive,
        'products' => $this->products,
    ]);
    }

    public function test()
    {
        $order = Order::where('payment_id', 'ch_3KmgAZFtGxzYz84L0hhOgVUK')
            ->first();
        $payment = Payment::where('id', 22)->first();

        return view('pdf.order_el', [
            'order'   => $order,
            'payment' => $payment,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class OrderController extends Controller
{

    public function order()
    {
        return view("web.order");
    }
}

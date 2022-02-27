<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public $webLangs = ['el', 'en', 'ru'];
    public $products = [];
    public $olive = null;

    public function __construct()
    {
        $this->products = Product::all();
        $this->olive = $this->products->where('id', 1);
    }
}

<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ApiController extends Controller
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
    public function products()
    {
        return $this->products;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsletter(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $newsletter = Newsletter::updateOrCreate([
            'email' => $request->email,
            'is_new' => 1
        ]);

        return 'Thank you for signing up to our newsletter.';
    }
}

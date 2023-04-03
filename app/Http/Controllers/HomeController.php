<?php

namespace App\Http\Controllers;


use Validator;
use Illuminate\Http\Request;
use DB;
use App\Models\orders;
use App\Models\products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
        ->get(['orders.*', 'products.*']);    
 
return view('dashboard',['fetchedData'=>$fetchedData]);
    }
}

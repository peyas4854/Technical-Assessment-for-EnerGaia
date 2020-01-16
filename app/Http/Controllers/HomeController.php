<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;
use App\Model\receive_product;
use App\Model\supplier_product;

use App\Http\Resources\ReceiveProductResource;



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

        if(auth::user()->type == 'user'){
            $value = receive_product::userData();
            return  view('home',compact('value'));

        }else{
             $value = supplier_product::supplierData();
             return  view('supplier',compact('value'));

        }

    }
}

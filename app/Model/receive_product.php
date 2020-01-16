<?php

namespace App\Model;

use App\Model\product;
use App\User;
use auth;
use Illuminate\Support\Facades\DB;
use App\Model\receive_product;



use Illuminate\Database\Eloquent\Model;

class receive_product extends Model
{

	public static  function userData(){
		return DB::table('users')->where('users.id','=',auth::id())
        ->leftJoin('receive_products', 'users.id', '=', 'receive_products.user_id')
        ->leftJoin('products', 'products.id', '=', 'receive_products.product_id')
        ->select('users.name as username', 'products.name as productname')
        ->get();
	}

	



   
 	



}

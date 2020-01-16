<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\product;
use App\User;
use auth;
use Illuminate\Support\Facades\DB;
use App\Model\supplier_product;

class supplier_product extends Model
{
    public static  function supplierData(){
    	
		return DB::table('users')->where('users.id','=',auth::id())
        ->leftJoin('supplier_products', 'users.id', '=', 'supplier_products.user_id')
        ->leftJoin('products', 'products.id', '=', 'supplier_products.product_id')
        ->select('users.name as username', 'products.name as productname')
        ->get();
	}
}

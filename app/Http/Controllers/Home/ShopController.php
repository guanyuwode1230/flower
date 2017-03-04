<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shoppingcart()
    {
        $products = DB::table('products')->get();

        $category = DB::table('category')->get();

        return view('home.index',compact('products', 'category'));
    }




    
    



}

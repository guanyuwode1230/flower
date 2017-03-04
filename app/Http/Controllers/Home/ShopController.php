<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopController extends CommonController
{
    public function shoppingcart()
    {


        return view('home.shoppingcart');
    }




    
    



}

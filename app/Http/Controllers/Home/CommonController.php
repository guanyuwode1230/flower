<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Category;
use App\Http\Model\Products;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct()
    {
        $products = Products::get();
        $category = Category::get();
        View::share('products',$products);
        View::share('category',$category);
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        $category = DB::table('category')->get();

        return view('home.index',compact('products', 'category'));
    }

    public function faqs()
    {

        return view('home.faqs');
    }

    public function checkout()
    {

        return view('home.checkout');
    }

    public function contact()
    {

        return view('home.contact');
    }

    public function products()
    {

        return view('home.products');
    }

    public function about()
    {

        return view('home.about');
    }

    public function productdetail()
    {

        return view('home.productdetail');
    }




    
    



}

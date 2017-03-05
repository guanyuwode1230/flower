<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Model\User_address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends CommonController
{
    public function index()
    {

        return view('home.index');
    }

    public function faqs()
    {

        return view('home.faqs');
    }

    public function checkout()
    {
        $input = Input::all();
//        dd($input);
        if($input){
echo 11111;
            //            $res = User_address::create($input);
//            if (!$res){
//                return back()->with('errors','数据填充失败，请稍后重试！');
//            }
        }else{
            return view('home.checkout');

        }
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

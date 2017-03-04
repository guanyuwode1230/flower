
@extends('layouts.home')

@section('info')
<meta name="keywords" content="free template, floral shop, ecommerce, online shopping, store" />
<meta name="description" content="Floral Shop is free website template for ecommerce or online shopping websites. Products, Shopping Cart, FAQs and Checkout pages are included." />
@endsection

@section('content')
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>情景分类</h3>
            <div class="content">
                <ul class="sidebar_list">

                    @foreach($category as $c)
                    <li><a href="#">{{$c->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>

            <h3>本周特价</h3>
            <div class="content special">
                <img src="{{asset('resources/views/home/images/templatemo_image_01.jpg')}}" alt="Flowers" />
                <a href="#">爆菊套餐</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
    <div id="content" class="right">
		<h2>花点时间 挑选属于你的那一束吧</h2>
		<p></p>
        @foreach($products as $p)
        <div class="product_box">
            <a href="productdetail.html"><img src="{{asset($p->image)}}" alt="{{$p->tags}}" /></a>
      		<h3>{{$p->name}}</h3>
            <p class="product_price">${{$p->price}}</p>
            <p class="add_to_cart">
                <a href="{{url('home/productdetail')}}">详细信息</a>
                <a href="{{url('home/shoppingcart')}}">加入购物车</a>
            </p>
        </div>
    	@endforeach

        <div class="blank_box">
        	<a href="#"><img src="{{asset('resources/views/home/images/free_shipping.jpg')}}" alt="Free Shipping" /></a>
        </div>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->
@endsection


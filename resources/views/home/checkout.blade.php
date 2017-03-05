
@extends('layouts.home')

@section('info')
<meta name="keywords" content="free template, floral shop, ecommerce, online shopping, store" />
<meta name="description" content="Floral Shop, Check Out, free template for ecommerce websites." />
@endsection


@section('content')

<div id="templatemo_main_wrapper">
<div id="templatemo_main">
    @parent
    
    <div id="content" class="right">
    	<h2>结算</h2>
        
		<h3>完善个人信息</h3>
        <div class="content_half left form_field">
            <form action="{{url('home/checkout')}}" method="post">
                <input name="_token" type="hidden" value="{{csrf_token()}}"/>

                <br />用户名/(必填)
                <input name="name" type="text" id="fullname" maxlength="40" />
                <br />邮箱:
                <input name="email" type="text" id="email" maxlength="40" />
                <br />电话:
                <input name="phone" type="text" id="phone" maxlength="40" />

                <span>*请保持电话畅通</span>
                <br />地址:
                <input name="address" type="text" id="address" maxlength="40" />
                <br />省份:
                <select name="city_id" id="city">
                    <option value="1">wewewe</option>
                    <option value="2">wewewe</option>
                    <option value="3">wewewe</option>
                </select>
                {{--<input name="city" type="text" id="city" maxlength="40" />--}}
                <br />城市:
                <select name="arae_id" id="country">
                    <option value="1">wewewe</option>
                    <option value="2">wewewe</option>
                    <option value="3">wewewe</option>
                </select>
                {{--<input name="country" type="text" id="country" maxlength="40" />--}}
                <input type="submit" value="提交信息">
                <input type="reset" value="重置信息">
            </form>
        </div>

                <div class="content_half right form_field">




                </div>

                <div class="cleaner h40 content_half">


                </div>



            
            <h3>订单卡</h3>
            <h4>总计: <strong>$560</strong></h4>
			<p><input name="terms" type="checkbox" id="terms" />
		    I have read and accept the <a href="#">Terms of Use</a>. Validate <a href="#" ><strong>XHTML</strong></a> &amp; <a href="#" ><strong>CSS</strong></a>.</p>
            <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" align="middle" /></a>&nbsp;(recommended if you have a PayPal account. Fastest way to complete your order.)</p>
            <p><a href="#"><img src="images/flagship.jpg" alt="Flagship" align="middle" /></a>&nbsp;(free shipping for orders above $500)</p>
            <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        	</div>    
        
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

@endsection
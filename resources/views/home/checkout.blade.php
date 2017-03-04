
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
            <form action="{{url('admin/user')}}" method="post">
                <div class="content_half left form_field">
                    <br />用户名/(必填)
                    <input name="fullname" type="text" id="fullname" maxlength="40" />
                    <br />邮箱:
                    <input name="email" type="text" id="email" maxlength="40" />
                    <br />电话:
                    <input name="phone" type="text" id="phone" maxlength="40" />
                    <br /><span>请保持电话畅通</span>
                </div>

                <div class="content_half right form_field">
                    <br />地址:
                    <input name="address" type="text" id="address" maxlength="40" />
                    <br />省份:
                    <input name="city" type="text" id="city" maxlength="40" />
                    <br />城市:
                    <input name="country" type="text" id="country" maxlength="40" />



                </div>

                <div class="cleaner h40 content_half">

                    <input type="submit" value="提交信息">
                    <input type="reset" value="重置信息">
                </div>

            </form>

            
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
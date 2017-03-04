
@extends('layouts.home')

@section('info')
<meta name="keywords" content="free template, floral shop, ecommerce, online shopping, store" />
<meta name="description" content="Floral Shop, Check Out, free template for ecommerce websites." />
@endsection


@section('content')

<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <li><a href="#">Nulla odio ipsum</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Aliquam euismod</a></li>
                    <li><a href="#">Curabitur ac mauris</a></li>
                    <li><a href="#">Mauris nulla tortor</a></li>
                    <li><a href="#">Nullam ultrices</a></li>
                    <li><a href="#">Vivamus scelerisque</a></li>
                    <li><a href="#">Suspendisse posuere</a></li>
                    <li><a href="#">Quisque vel justo</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/templatemo_image_01.jpg" alt="Flowers" />
                <a href="#">Citrus Burst Bouquet</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
    	<h2>Checkout</h2>
        
		<h3>BILLING DETAILS</h3>
        
            <div class="content_half left form_field">
				Full Name (must be the same as on credit card)
                <input name="fullname" type="text" id="fullname" maxlength="40" />
                Address:
      			<input name="address" type="text" id="address" maxlength="40" />
                City:
                <input name="city" type="text" id="city" maxlength="40" />
                Country:
                <input name="country" type="text" id="country" maxlength="40" />
            </div>
            
            <div class="content_half right form_field">
            	Email:
			  <input name="email" type="text" id="email" maxlength="40" />
                Phone:<br />
                <input name="phone" type="text" id="phone" maxlength="40" />
                <span>Please, specify your reachable phone number to call you for a verification.</span>
            </div>
            
            <div class="cleaner h40"></div>
            
            <h3>SHOPPING CARD</h3>
            <h4>TOTAL: <strong>$560</strong></h4>
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
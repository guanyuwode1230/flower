
@extends('layouts.home')

@section('info')
<meta name="keywords" content="free template, floral shop, ecommerce, online shopping, store" />
<meta name="description" content="Floral Shop, Product Details, free template for ecommerce websites." />
@endsection
@section('content')
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
    @parent
    
    <div id="content" class="right">
      	<h2>Product Detail</h2>
        <div class="content_half left">
        	<a  rel="lightbox" href="images/product/image_01_l.jpg"><img src="images/product/image_01.jpg" alt="yellow flowers" /></a>
        </div>
            <div class="content_half right">
                <table>
                    <tr>
                        <td width="130">Price:</td>
                        <td width="84">$240</td>
                    </tr>
                    <tr>
                        <td>Availability:</td>
                        <td><strong>In Stock</strong></td>
                    </tr>
                    <tr><td>Quantity</td><td><input type="text" value="1" size="6" maxlength="2" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="button">Add to Cart</a>
			</div>
            <div class="cleaner h40"></div>
            
            <h4>Product Description</h4>
            <p>Sed ullamcorper nunc at magna egestas fermentum. Etiam turpis orci, condimentum luctus orci id, elementum vulputate nunc. Donec diam turpis, iaculis vitae feugiat ac, molestie at odio. Nullam tincidunt est ac sagittis ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero. Validate <a href="#" ><strong>XHTML</strong></a> &amp; <a href="#" ><strong>CSS</strong></a>.</p>
            <div class="cleaner h40"></div>
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

@endsection
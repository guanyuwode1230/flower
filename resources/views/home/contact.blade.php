@extends('layouts.home')

@section('info')

<meta name="keywords" content="free template, contact, floral shop, ecommerce, online store" />
<meta name="description" content="Floral Shop, Contact Form, Location Maps, Addresses, free template for ecommerce websites." />

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
		<h2>Contact</h2>
        <p>Morbi adipiscing gravida lacus, id rhoncus neque sollicitudin ac. Sed eget purus vitae enim pulvinar viverra. Cras ut elit et ligula blandit eleifend. Nam at odio sem, sed tempor justo.</p>
        <div class="cleaner h20"></div>
        <div class="col col13">
            <h4>Mailing Address</h4>
        	<h6><strong>Office One</strong></h6>
            800-220 Fusce nec ante at odio, <br />
            In vitae lacus in purus, 66770<br />
            Diam a mollis tempor<br /><br />
            
			<strong>Phone:</strong> 010-440-5500<br />
            <strong>Email:</strong> <a href="mailto:contact@company.com">contact@company.com</a> <br />
            
            <div class="cleaner h20"></div>
            
            <h6><strong>Office Two</strong></h6>
            600-110 Duis lacinia, <br />
            Ullamcorper mattis, 88770<br />
            Maecenas a diam, mollis magna<br /><br />
            
			<strong>Phone:</strong> 020-660-8800<br />
            <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a> <br />

            Validate <a href="#" ><strong>XHTML</strong></a> &amp; <a href="#" ><strong>CSS</strong></a>
		</div>
        <div class="col col23 no_margin_right">
        	<div class="map_border">
                <iframe width="430" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe></div>
			
        </div>
        <div class="cleaner h40"></div>
        <div id="contact_form">
           <form method="post" name="contact" action="#">
           		<div class="col col13">
                
                    <label for="name">Name:</label> 
              		<input name="name" type="text" class="input_field" id="name" maxlength="40" />
                	<div class="cleaner h10"></div>
                    <label for="email">Email:</label> 
          			<input name="email" type="text" class="required input_field" id="email" maxlength="40" />
                	<div class="cleaner h10"></div>
                    <label for="phone">Phone:</label> 
        			<input name="phone" type="text" class="input_field" id="phone" maxlength="20" />
                	<div class="cleaner h10"></div>
                	
                
			 	</div>
                
                <div class="col col23 no_margin_right">
                    <label for="message">Message:</label> 
               	  	<textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
                    <input type="submit" class="submit_btn left" name="submit" id="submit" value="Send" />
                    <input type="reset" class="submit_btn submit_right" name="reset" id="reset" value="Reset" />
				</div>
                
                
            </form>
        </div>
        <div class="cleaner h40"></div>        
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>  
        <div class="cleaner"></div>  
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

@endsection
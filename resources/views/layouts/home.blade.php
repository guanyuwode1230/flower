<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>爱花 - @yield('title')</title>

@yield('info')

<link href="{{asset('resources/views/home/templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{asset('resources/views/home/css/orman.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('resources/views/home/css/nivo-slider.css')}}" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('resources/views/home/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/home/js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>

<link rel="stylesheet" href="{{asset('resources/views/home/css/slimbox2.css')}}" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="{{asset('resources/views/home/js/slimbox2.js')}}"></script> 


</head>

<body>

<br/>
<h1>说鸡不说吧，文明你我他.说鸡又说吧，大家来买花</h1>
<div id="templatemo_wrapper_h">
<div id="templatemo_header_wh">

    <div id="templatemo_header" class="header_home">
        <div id="site_title"><a href="http://www.cssmoban.com/" title="模板之家">模板之家</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="{{url('home/index')}}" class="selected">首页</a></li>
                <li><a href="{{url('home/about')}}">关于我们</a></li>
                <li><a href="{{url('home/products')}}">花花世界</a>
                    <ul>
                        <li><a href="http://www.cssmoban.com/" >Sub Page One</a></li>
                        <li><a href="http://www.cssmoban.com/" >Sub Page Two</a></li>
                        <li><a href="http://www.cssmoban.com/" >Sub Page Three</a></li>
                        <li><a href="http://www.cssmoban.com/" >Sub Page Four</a></li>
                        <li><a href="http://www.cssmoban.com/" >Sub Page Five</a></li>
                    </ul>
                </li>
                <li><a href="{{url('home/checkout')}}">结算订单</a></li>
                <li><a href="{{url('home/contact')}}">联系我们</a></li>
                <li><a href="{{url('home/faqs')}}">客户服务</a></li>
            </ul>
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value="搜索" name="keyword" id="keyword" title="keyword" 
                            onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> 
        <a href="#" title="visit "  class="site_repeat" target="_blank"><img src="images/top_repeat.png"  alt="visit " /></a><!-- end of templatemo_menu -->

        <div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="{{asset('resources/views/home/images/portfolio/01.jpg')}}" alt="slider image 1" />
                <a href="http://www.cssmoban.com/" >
                    <img src="{{asset('resources/views/home/images/portfolio/02.jpg')}}" alt="slider image 2" title="This is an example of a caption" />
                </a>
                <img src="{{asset('resources/views/home/images/portfolio/03.jpg')}}" alt="slider image 3" />
                <img src="{{asset('resources/views/home/images/portfolio/04.jpg')}}" alt="slider image 4" title="#htmlcaption" />
                <img src="{{asset('resources/views/home/images/portfolio/05.jpg')}}" alt="slider image 5" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Example</strong> caption with <a href="#" >a credit link</a> for <em>this slider</em>.
            </div>
        </div> 
        <script type="text/javascript" src="{{asset('resources/views/home/js/jquery-1.6.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('resources/views/home/js/jquery.nivo.slider.pack.js')}}"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                controlNav:false
            });
        });
        </script>
    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->

@yield('content')

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
    <div class="footer_left">
        <a href="#"><img src="{{asset('resources/views/home/images/1311260370_paypal-straight.png')}}" alt="Paypal" /></a>
        <a href="#"><img src="{{asset('resources/views/home/images/1311260374_mastercard-straight.png')}}" alt="Master" /></a>
        <a href="#"><img src="{{asset('resources/views/home/images/1311260374_visa-straight.png')}}" alt="Visa" /></a>
    </div>
    <div class="footer_right">
        <p><a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2084 <a href="#">Company Name</a> | Collect from <a href="http://www.cssmoban.com/" title="模板之家">模板之家</a></p>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
<script type='text/javascript' src='{{asset('resources/views/home/js/logging.js')}}'></script>
</html>
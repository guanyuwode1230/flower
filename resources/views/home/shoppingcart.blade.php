@extends('layouts.home')

@section('info')

<meta name="keywords" content="free template, shopping cart, floral, ecommerce, online, store" />
<meta name="description" content="Floral, Shopping Cart, free template for ecommerce websites." />

@endsection

@section('content')
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
    @parent
    
    <div id="content" class="right">
    	<h2>我的购物车</h2>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="168" align="left">名称</th>
                <th width="188" align="left">详细信息</th>
                <th width="60" align="center">数量</th>
                <th width="80" align="right">价格</th>
                <th width="80" align="right">总计</th>
                <th width="64"> </th>
          	</tr>
            <tr bgcolor="#41581B">
                <td><img src="{{asset('resources/views/home/images/product/01.jpg')}}" alt="flower image 1" /></td>
                <td>爆菊套餐</td>
                <td align="center"><input name="quantity1" type="number" id="quantity1" value="1" size="2" maxlength="2" /> </td>
                <td align="right">$240</td> 
                <td align="right">$240</td>
                <td align="center"> <a href="#"><img src="{{asset('resources/views/home/images/remove.png')}}" alt="remove" /><br />移除</a> </td>
            </tr>

            <tr bgcolor="#41581B">
                <td colspan="3"><a href="shoppingcart.html"><strong>更新</strong></a> 购物车.&nbsp;&nbsp;</td>
                <td align="right"><h4>总计:</h4></td>
                <td align="right"><h4>$560</h4></td>
                <td> </td>
            </tr>
        </table>
		<div class="cleaner h20"></div>
        <div class="right"><a href="checkout.html" class="button">结算</a></div>
        <div class="cleaner h20"></div>
        <div class="blank_box">
        	<a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

@endsection
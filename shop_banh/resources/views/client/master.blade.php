<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- thẻ này dùng để thay cho asset('') -->
	<base href="{{asset('')}}">
	<!-- end -->
	<title>shop_banh</title>
	<link href='public/template/assets/dest/css/font1.css' rel='stylesheet' type='text/css'>
	<link href='public/template/assets/dest/css/font1.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="public/template/assets/dest/css/bootstrap.min.css">

	<!-- //day la vidu chỉ cần public/template, k cần asset('public/template nưa') -->
	<link rel="stylesheet" href="public/template/assets/dest/css/font-awesome.min.css">
	<!-- end -->

	<link rel="stylesheet" href="{!!asset('public/template/assets/dest/vendors/colorbox/example3/colorbox.css')!!}">
	<link rel="stylesheet" href="{!!asset('public/template/assets/dest/rs-plugin/css/settings.css')!!}">
	<link rel="stylesheet" href="{!!asset('public/template/assets/dest/rs-plugin/css/responsive.css')!!}">
	<link rel="stylesheet" title="style" href="{!!asset('public/template/assets/dest/css/style.css')!!}">
	<link rel="stylesheet" href="{!!asset('public/template/assets/dest/css/animate.css')!!}">
	<link rel="stylesheet" title="style" href="{!!asset('public/template/assets/dest/css/huong-style.css')!!}">
</head>
<body>

	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Khu phố 4, phường tân hiệp, tp Biên Hòa - ĐN</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0334675630</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
							<li><a href="#"><i class="fa fa-user"></i>{{Auth::user()->full_name}}</a></li>
							<li><a href="{{url('userregister')}}">Đăng kí</a></li>
							<li><a href="{{url('userlogout')}}">Đăng xuất</a></li>
						@else
						<li><a href="{{url('userregister')}}">Đăng kí</a></li>
						<li><a href="{{url('userlogin')}}">Đăng nhập</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="public/template/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{url('search')}}">
					        <input type="text" name="search" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng ({{Cart::count()}}) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<?php $cart=Cart::content()?>

								@foreach($cart as $c)
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img style="width: 50px; height: 50px;" src="{{asset('public/template/image/product/'.$c->options->image)}}"></a>
										<div class="media-body">
											<span class="cart-item-title">{{$c->name}}</span>
											
											<span class="cart-item-amount">quantity: {{$c->qty}}</span>
											<span>price: {{number_format($c->price,0,",",".")}} vnđ</span>
										</div>
									</div>
								</div>
								@endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Cart::subtotal(0,",",".")}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{url('checkout')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
										<a href="{{url('gio_hang')}}" class="beta-btn primary text-center">Giỏ hàng<i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{url('/')}}">Trang chủ</a></li>
						<li><a>Sản phẩm</a>
							<?php $type=DB::table("type_products")->get()?>
							<ul class="sub-menu">
								@foreach($type as $k=>$v)
								<li><a href="{{url('type',$v->id)}}">{{$v->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{url('about')}}">Giới thiệu</a></li>
						<li><a href="{{url('contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	
	@yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href="{{url('about')}}"><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href="{{url('about')}}"><i class="fa fa-chevron-right"></i> Web development</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>shop_banh khu phố 4 - phường tân hiệp, BH-ĐN, Phone: +0334675630</p>
								<p>Tất cả thắc mắc, quý khách cũng có thể liên hệ với chúng tôi qua email nctri0110php@gmail.com, chúng tôi sẻ trả lời bạn sớm nhất có thể! trân trọng..!!</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Shop_banh (&copy;) 2018</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="{!!asset('public/template/assets/dest/js/jquery.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/js/bootstrap.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/vendors/bxslider/jquery.bxslider.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/vendors/colorbox/jquery.colorbox-min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/vendors/animo/Animo.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/vendors/dug/dug.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/js/scripts.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/js/waypoints.min.js')!!}"></script>
	<script src="{!!asset('public/template/assets/dest/js/wow.min.js')!!}"></script>
	<!--customjs-->
	<script src="{!!asset('public/template/assets/dest/js/custom2.js')!!}"></script>

	<script src="{!!asset('public/js/myJS.js')!!}"></script>
		
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	<?php
	if (session('al'))
	{
	   echo "<script>
					setTimeout(function(){ alert('chúng tôi đã nhận được phản hồi của bạn!cảm ơn bạn đã ghé thăm shop!!'); }, 2000);
				</script>";
	}
	?>
</body>
</html>

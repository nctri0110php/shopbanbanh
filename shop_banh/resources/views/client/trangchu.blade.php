<?php 
	if(Session::get('check')=='success'){
		echo "<script>
		setTimeout(function(){ alert('bạn đã đặt hàng thành công!cảm ơn bạn đã mua hàng tại shop!!'); }, 1500);
		</script>";
	}
?>
@extends("client.master")
@section("content")
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    	<div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
								@foreach ($slide as $key => $value)							    		
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
														<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{!!asset('public/template/image/slide/'.$value->image)!!}" data-src="{!!asset('public/template/image/slide/'.$value->image)!!}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{!!asset('public/template/image/slide/'.$value->image)!!}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
														</div>
													</div>

							        </li>
						        @endforeach
								
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{count($newproduct)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							
							@foreach($newproduct as $new)
							<div class="row-md-3">
								<div class="col-sm-3 col-md-3">
									<div class="single-item">
										@if($new->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										
										<div class="single-item-header">
											<a href="{{url('product',$new->id)}}"><img style="height: 200px; width: 320px" src="{{asset('public/template/image/product/'.$new->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												@if($new->promotion_price!=0)
												<span class="flash-del">{{$new->unit_price}}</span>
												<span class="flash-sale">{{$new->promotion_price}}</span>
												@else
												<span>{{$new->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
															
							</div>

							@endforeach
							<div class="clearfix"></div>
							<div class="row" style="text-align: center">{{$newproduct->links()}}</div>
							
						</div> <!-- .beta-products-list -->


						<div class="space50"></div>
						<div class="beta-products-list">
							<div class="clearfix"></div>
							<h4 style="margin-top: 50px">Top Products</h4>

							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							@foreach($promotionproduct as $product)
							<div class="row-md-3">
								<div class="col-sm-3 col-md-3">
									<div class="single-item">
										@if($product->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										
										<div class="single-item-header">
											<a href="{{url('product',$product->id)}}"><img style="height: 200px; width: 320px" src="{{asset('public/template/image/product/'.$product->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$product->name}}</p>
											<p class="single-item-price">
												@if($product->promotion_price!=0)
												<span class="flash-del">{{$product->unit_price}}</span>
												<span class="flash-sale">{{$product->promotion_price}}</span>
												@else
												<span>{{$product->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
															
							</div>

							@endforeach
							<div class="clearfix"></div>
							<div class="row" style="text-align: center;">{{$newproduct->links()}}</div>
							<div class="space40">&nbsp;</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection
@extends('client.master')
@section("content")
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">

				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{{asset('public/template/image/product/'.$product->image)}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$product->name}}</p>
								<input type="hidden" value="{{$product->id}}" name="">
								<p class="single-item-price">
									@if($product->promotion_price!=0)
									<span class="flash-del">{{$product->unit_price}}</span>
									<span class="flash-sale">{{$product->promotion_price}}</span>
									@else
									<span class="flash-sale">{{$product->unit_price}}</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$product->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								
								<select id="opt" class="wc-select" name="color">
									<option value="1">1</option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="30">30</option>
									<option value="40">40</option>
									<option value="50">50</option>
									<option value="60">60</option>
									<option value="70">70</option>
									<option value="80">80</option>
									<option value="90">90</option>
									<option value="100">100</option>
								</select>
								<a id="add" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$product->description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>

						@foreach($relatedpro as $related)
							<div class="row-md-4">
								<div class="col-sm-4 col-md-4">
									<div class="single-item">
										@if($related->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										
										<div class="single-item-header">
											<a href="{{url('product',$related->id)}}"><img style="height: 200px; width: 320px" src="{{asset('public/template/image/product/'.$related->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$related->name}}</p>
											<p class="single-item-price">
												@if($related->promotion_price!=0)
												<span class="flash-del">{{$related->unit_price}}</span>
												<span class="flash-sale">{{$related->promotion_price}}</span>
												@else
												<span>{{$related->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$related->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$related->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>	
															
							</div>

							@endforeach
							<div class="clearfix"></div>
							<div class="row" style="text-align: center;">{{$relatedpro->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				
				<div class="col-sm-3 aside">
					@if($relatedpro->currentPage()<=$promotionproduct->lastPage())
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($promotionproduct as $pro)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('product',$pro->id)}}"><img src="{{asset('public/template/image/product/'.$pro->image)}}" alt=""></a>
									<div class="media-body">
										{{$pro->name}}
										<span class="beta-sales-price">{{$pro->price}}</span>
									</div>
								</div>
								@endforeach
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					@endif
					@if($relatedpro->currentPage()<=$newproduct->lastPage())
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($newproduct as $newpro)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{url('product',$newpro->id)}}"><img src="{{asset('public/template/image/product/'.$newpro->image)}}" alt=""></a>
									<div class="media-body">
										{{$newpro->name}}
										<span class="beta-sales-price">{{$newpro->price}}</span>
									</div>
								</div>
								@endforeach
								<!-- <div class="clearfix"></div> -->
								<div class="widget"><span>{{$newproduct->links()}}</span></div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					@endif
				</div>
				
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection
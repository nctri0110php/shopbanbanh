@extends('client.master')	
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$onetype->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{url('/')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<div style="text-align: center;"><span style="font-size: 18px; font-weight: bold; text-align: center;margin-bottom: 12px">Danh mục sản phẩm</span></div>
						<ul class="aside-menu" style="margin-top: 10px; padding-top: 2px;">

							@foreach($type as $ty)
							<li><a href="{{url('type',$ty->id)}}">{{$ty->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{$countpro}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($product as $pr)
								<div class="col-sm-4">
									<div class="single-item">

										<div class="single-item-header">
											@if($pr->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
											<a href="{{url('product',$pr->id)}}"><img style="height: 200px; width: 300px"  src="{{asset('public/template/image/product/'.$pr->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pr->name}}</p>
											<p class="single-item-price">
												@if($pr->promotion_price!=0)
												<span class="flash-del">{{$pr->unit_price}}</span>
												<span class="flash-sale">{{$pr->promotion_price}}</span>
												@else
												<span class="flash-sale">{{$pr->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$pr->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$pr->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="clearfix"></div>
								<div style="text-align: center;"><span>{{$product->links()}}</span></div>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm liên quan</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{$countsplq}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sanphamlienquan as $splq)
								<div class="col-sm-4">
									<div class="single-item">

										<div class="single-item-header">
											@if($splq->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
											<a href="{{url('product',$splq->id)}}"><img style="height: 200px; width: 300px"  src="{{asset('public/template/image/product/'.$splq->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$splq->name}}</p>
											<p class="single-item-price">
												@if($splq->promotion_price!=0)
												<span class="flash-del">{{$splq->unit_price}}</span>
												<span class="flash-sale">{{$splq->promotion_price}}</span>
												@else
												<span class="flash-sale">{{$splq->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$splq->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$splq->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="clearfix"></div>
								<div style="text-align: center;"><span>{{$sanphamlienquan->links()}}</span></div>
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
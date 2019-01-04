@extends('client.master')	
@section('content')
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<div style="text-align: center;"><span style="font-size: 18px; font-weight: bold; text-align: center;margin-bottom: 12px">Danh mục sản phẩm</span></div>
						<ul class="aside-menu" style="margin-top: 10px; padding-top: 2px;">
							<?php $type=DB::table('type_products')->get(); ?>
							@foreach($type as $ty)
							<li><a href="{{url('type',$ty->id)}}">{{$ty->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{$c}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($search as $s)
								<div class="col-sm-4">
									<div class="single-item">

										<div class="single-item-header">
											@if($s->promotion_price!=0)
												<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
											<a href="{{url('product',$s->id)}}"><img style="height: 200px; width: 300px"  src="{{asset('public/template/image/product/'.$s->image)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$s->name}}</p>
											<p class="single-item-price">
												@if($s->promotion_price!=0)
												<span class="flash-del">{{$s->unit_price}}</span>
												<span class="flash-sale">{{$s->promotion_price}}</span>
												@else
												<span class="flash-sale">{{$s->unit_price}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{url('shoppingcart',$s->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{url('product',$s->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="clearfix"></div>
								<div style="text-align: center;"><span>{{$search->links()}}</span></div>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
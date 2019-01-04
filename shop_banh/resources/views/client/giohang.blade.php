@extends('client.master')
@section("content")

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Shopping Cart</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Shopping Cart</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		@if(count($ct)>0)
		<div id="content">
			
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-status">Image</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">Qty.</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ct as $c)
						<tr class="cart_item">
							<td class="product-name">
								<div class="media">
									<div class="media-body">
										<input type="hidden" value="{{$c->rowId}}" name="">
										<p class="font-large table-title">{{$c->name}}</p>
									</div>
								</div>
							</td>

							<td class="product-image">
								<img style="width: 100px; height: 100px;" src="{{asset('public/template/image/product/'.$c->options->image)}}">
							</td>

							<td class="product-price">
								<span class="amount">{{$c->price}}</span>
							</td>

							

							<td class="product-quantity">
								
								<a class="cart_quantity_up" href="{{url('updatecart?decrement=1&rid='.$c->rowId)}}"> - </a>
								<input min="1" max="300" value="{{$c->qty}}" type="number" disabled="disabled">
								<a class="cart_quantity_down" href="{{url('updatecart?increment=1&rid='.$c->rowId)}}"> + </a>
							</td>

							<td class="product-subtotal">
								<span class="amount">{{$c->qty*$c->price}} vnđ</span>
							</td>

							<td class="product-remove">
								<a href="{{url('delcart',$c->rowId)}}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>

					<tfoot>
						<tr>
							<td colspan="6" class="actions">

								<a href="{{url('destroycart')}}"><button type="submit" id="sua" class="beta-btn primary" name="update_cart">hủy giỏ hàng <i class="fa fa-chevron-right"></i></button></a>
								<a href="{{route('getcheckout')}}"><button type="submit" class="beta-btn primary" name="proceed">Proceed to Checkout <i class="fa fa-chevron-right"></i></button></a>
							</td>
						</tr>
					</tfoot>
				</table>
				<!-- End of Shop Table Products -->
			</div>


			<!-- Cart Collaterals -->
			<div class="cart-collaterals">

				<div style="width: 350px" class="cart-totals pull-right">
					<div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
					<div class="cart-totals-row"><span>Cart Subtotal:</span> <span>{{Cart::subtotal(0,",",".")}} vnđ</span></div>
					<div class="cart-totals-row"><span>Shipping:</span> <span>Free Shipping</span></div>
					<div class="cart-totals-row"><span>Order Total:</span> <span>{{Cart::subtotal(0,",",".")}} vnđ</span></div>
				</div>

				<div class="clearfix"></div>
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
		@else
		<div class="row" style="text-align: center;"style="padding-top: 30px;">
			<div><span style="color: red;font-size: 18px">Giỏ Hàng của bạn đang trống!!</span></div>
			<br>
			<a href="{{route('userhome')}}"><button type="button" class="btn btn-primary btn-lg btn-block">Mua Hàng Ngay!!</button></a>
			<br>
		</div>
		@endif
	</div> <!-- .container -->
@endsection
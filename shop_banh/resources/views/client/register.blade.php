@extends('client.master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng Kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng Kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		<div class="container">
		<div id="content">
			@include('errvalidate')
			@if(Session::get("registersuccess")=="ok")
				<div class="alert alert-success" style="text-align:center">
					<ul>
							<li>đăng kí thành công!!</li>
						
					</ul>
				</div>
			@endif
			<form action="{{route('postdangki')}}" method="post" class="beta-form-checkout">
				@csrf()
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4 style="margin-left: 230px;">Đăng Kí</h4>
						<hr>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="name">Full name*</label>
							<input type="name" id="name" name="name" value="{{old('name')}}"  required>
						</div>
						
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" value="{{old('email')}}" required>
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input type="Password" id="Password" name="password" required>
						</div>
						<div class="form-block">
							<label for="repassword">RePassword*</label>
							<input type="Password" id="Repassword" name="repassword" required>
						</div>
						<div class="form-block">
							<label for="email">Phone*</label>
							<input type="number" id="phone" name="phone" value="{{old('phone')}}" required>
						</div>
						<div class="form-block">
							<label for="address">Address*</label>
							<input type="text" id="Address" name="address" value="{{old('addressm')}}" required>
						</div>
						<hr>
						<div class="form-block" style=" margin-left: 230px;">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
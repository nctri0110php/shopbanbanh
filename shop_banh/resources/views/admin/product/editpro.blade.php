@extends('admin.master')
@section('content')

                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                        @include("errvalidate")
                    	@if(Session::has('flash_warning'))
                        <div class="alert alert-{{Session::get('flash_warning')}}">
                            {{Session::get('flash_message')}}
                        </div>
                         @endif
                        <form action="{{route('posteditpro',['id'=>$datapro->id])}}" method="POST" enctype="multipart/form-data">
                        	@csrf()
                            <div class="form-group">
                                <label>Type_product</label>
                                <select class="form-control" name="type">
                                    <?php select_option($data,$id_type_current)?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="name" value="{{$datapro->name}}" placeholder="Please Enter Product Name" />
                            </div>
                            <div class="form-group">
                                <label>Product unit_price</label>
                                <input type="number" class="form-control" name="unitprice" value="{{$datapro->unit_price}}" placeholder="Please Enter Product Unit_price" />
                            </div>
                            <div class="form-group">
                                <label>Product Promotion_price</label>
                                <input type="number" class="form-control" name="promotion" value="{{$datapro->promotion_price}}" placeholder="Please Enter Product Promotion_price" />
                            </div>
                            <div class="form-group">
                                <label>Product unit</label>
                                <input class="form-control" name="unit" value="{{$datapro->unit}}" placeholder="Please Enter Product Unit" />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea  name="description" class="ckeditor" id="editor1">{{$datapro->description}}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>product Old Image</a> </strong></label><br>
                                <img width="300px" height="250px" src="{{asset('public/template/image/product/'.$datapro->image)}}">
                            </div>
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>Product New Image</a> </strong></label><br>
                                <input type="file" name="fImages">
                            </div>
                            <button type="submit" class="btn btn-default">Edit Pro</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>               
          		
   @endsection
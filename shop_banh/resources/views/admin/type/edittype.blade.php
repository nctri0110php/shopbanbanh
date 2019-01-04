@extends('admin.master')
@section('content')

                    <div class="col-lg-12">
                        <h1 class="page-header">Type_product
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                    	@if(Session::has('flash_warning'))
                        <div class="alert alert-{{Session::get('flash_warning')}}">
                            {{Session::get('flash_message')}}
                        </div>
                         @endif
                        <form action="{{route('postedittype',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                        	@csrf()
                            
                            <div class="form-group">
                                <label>Type Name</label>
                                <input class="form-control" name="txtName" value="{{$data->name}}" placeholder="Please Enter Category Name" />
                            </div>
                            
                            <div class="form-group">
                                <label>Type Description</label>
                                <textarea  name="txtDescription" class="ckeditor" id="editor1">{!!$data->description!!}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>Old Type Image: </a> </strong></label>
                                <img src="{{asset('public/template/image/product/'.$data->image)}}" height="100px" width="100px">
                            </div>
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>New Type Image</a> </strong></label><br>
                                <input type="file" name="fImages">
                            </div>
                            <button type="submit" class="btn btn-default">Edit Type</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>               
          		
   @endsection
@extends('admin.master')
@section('content')

                    <div class="col-lg-12">
                        <h1 class="page-header">Type_product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                    	@if(Session::has('flash_warning'))
                        <div class="alert alert-{{Session::get('flash_warning')}}">
                            {{Session::get('flash_message')}}
                        </div>
                         @endif
                        <form action="{{route('postaddtype')}}" method="POST" enctype="multipart/form-data">
                        	@csrf()
                            
                            <div class="form-group">
                                <label>Type Name</label>
                                <input class="form-control" name="txtName" value="{{old('txtName')}}" placeholder="Please Enter Category Name" />
                            </div>
                            
                            <div class="form-group">
                                <label>Type Description</label>
                                <textarea  name="txtDescription" class="ckeditor" id="editor1">{{old('txtDescription')}}</textarea>
                            </div>
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>Type Image</a> </strong></label><br>
                                <input type="file" name="fImages">
                            </div>
                            <button type="submit" class="btn btn-default">Add Type</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>               
          		
   @endsection
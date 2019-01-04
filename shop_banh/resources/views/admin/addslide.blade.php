@extends('admin.master')
@section('content')
<!-- <div id="page-wrapper" style="margin-left: 300px; margin-top: 100px">
            <div class="container-fluid">
                <div class="row">
                	 -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                    	@if(Session::get('flash_warning')=="success")
                        <div class="alert alert-success">
                            Thêm thành công!
                        </div>
                         @endif
                         @if(Session::get('flash_warning')=="danger")
                        <div class="alert alert-danger">
                            Lỗi tải file (chỉ dk tải file .jpg, .png, .gif)!
                        </div>
                         @endif
                         @if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
                        <!--  -->
                        <form action="{{route('postaddslide')}}" method="POST" enctype="multipart/form-data">
                        	@csrf()
                            <!-- <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="slt_parent">
                                    <option value="0">Please Choose Category (default 0)</option>
                                    <option value='1'>--thời trang nam</option><option value='35'>----áo sơ mi</option><option value='37'>----quần thể thao nam</option><option value='38'>----quần kaki nam</option><option value='41'>----quần đá banh</option><option value='27'>--thời trang nữ</option><option value='36'>----áo sơ mi nữ</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtKeyword" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button> -->
                            <div class='form-group'>
                                <label class="glyphicon glyphicon-plus" id="multiple_file"><strong>&nbsp;<a>Add_Multiple_Slide:</a> </strong></label><br>
                                <input type="file" name="fImages[]" multiple="multiple" id="multiple">
                            </div>
                            <button style="background-color: red; color: white" type="submit" class="btn btn-default">Add Slide</button>
                        <form>
                        
                    </div>
                    @if(Session::get('flash_warning')=="delsuccess")
                        <div class="col-lg-12">
                        <div class="alert alert-success">
                            Xóa thành công!
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Delete</small>
                        </h1>
                    </div>
                    <div class="col-lg-6" style="padding-bottom:120px">
                        <!--  -->
                        <table class="table" id="dataTables-example">
                        <thead>
                            <tr align="center" style="background-color: black">
                                <th>ID</th>
                                <th>Image</th>                                
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        	
                            @foreach($data as $sl)
                            	<tr class="odd gradeX" align="center">
                                    <td>{{$sl->id}}</td>
                                    <td><img width="100px" height="100px" src="{{asset('public/template/image/slide/'.$sl->image)}}"></td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick ="return delete_confirm()" href="{{route('delslide',['id'=>$sl->id])}}" > Delete</a></td>
                                </tr>
                               
                          	@endforeach
                        </tbody>
                    </table>
                   
                   
                    </div>
                <!-- </div> -->
                <!-- /.row -->
            <!-- </div> -->
            <!-- /.container-fluid -->
        <!-- </div> -->
        <!-- /#page-wrapper -->

    </div>
@endsection
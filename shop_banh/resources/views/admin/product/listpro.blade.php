@extends('admin.master')
@section('content')
                            @if(Session::has('flash_warning'))
                            <div class="col-12">
                            <div class="alert alert-{{Session::get('flash_warning')}}">
                                {{Session::get('flash_message')}}
                            </div>
                            </div>
                            @endif
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Default Example</b></h4>
                                    <p class="text-muted font-14 m-b-30">
                                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code></code>.
                                    </p>

                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>type</th>
                                            <th>Description</th>
                                            <th>unit_price</th>
                                            <th>promotion_price</th>
                                            <th>image</th>
                                            <th>Xóa</th>
                                            <th>Sửa</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($data as $pro)
                                        <tr>
                                            <td>{{$pro->id}}</td>
                                            <td>{{$pro->name}}</td>
                                            <td>{{$pro->typename}}</td>
                                            <td>{!!$pro->description!!}</td>
                                            <td>{{$pro->unit_price}}</td>
                                            <td>{!!$pro->promotion_price!!}</td>
                                            <td style="text-align: center;"><img src="{{asset('public/template/image/product/'.$pro->image)}}" width="50px" height="50px"></td>
                                            <!-- public/myJS/adJS -->
                                            <td><a href="{{route('delpro',['id'=>$pro->id])}}" onclick="return delete_confirm()"><button type="button" class="btn btn-danger">Xóa</button></a></td>
                                            <td><a href="{{route('geteditpro',['id'=>$pro->id])}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         <!-- end row -->
                            <!-- <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>List Type_Product</b></h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Danh sách các loại sản phẩm hiện có trong shopbanh.
                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>Description</th>
                                            <th>image</th>
                                            <th>Xóa</th>
                                            <th>Sửa</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($data as $typepro)
                                        <tr>
                                            <td>{{$typepro->id}}</td>
                                            <td>{{$typepro->name}}</td>
                                            <td>{{$typepro->description}}</td>
                                            <td style="text-align: center;"><img src="{{asset('public/template/image/product/'.$typepro->image)}}" width="50px" height="50px"></td>
                                            public/myJS/adJS
                                            <td><a href="{{route('del',['id'=>$typepro->id])}}" onclick="return delete_confirm()"><button type="button" class="btn btn-danger">Xóa</button></a></td>
                                            <td><a href="{{asset('')}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
@endsection

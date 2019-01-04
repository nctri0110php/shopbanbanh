<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\product;
use App\typeproduct;
use DB,File;

class productController extends Controller
{
    public function getaddproduct()
	{
		$data=typeproduct::select("id","name")->get()->toArray();
		// dd($data);
		return view('admin.product.addpro',compact("data"));
	}
	public function postaddproduct()
	{
		$validatedData = Request::validate([
        'name' => 'required',
        'type' => 'required',
        'unitprice'=>'required',
        'promotion' => 'required',
        'unit' => 'required',
        'description'=>'required',
        'fImages'=>'required',
    	]);

		$file= Request::file("fImages");
		// dd($file);
		if(Request::hasFile('fImages')){
			$extension=['jpg','png','gif'];
			$check=in_array($file->getClientOriginalExtension(), $extension);
			if($check){
				$file_name= date("ymdhis").$file->getClientOriginalName();
				$pro= new product;
				$pro->name= Request::input('name');
				$pro->id_type= Request::input('type');
				$pro->description= Request::input('description');
				$pro->unit_price= Request::input('unitprice');
				$pro->promotion_price= Request::input('promotion');
				$pro->image=$file_name;
				$pro->unit= Request::input('unit');
				$pro->new= 0;
				$file->move('public/template/image/product/',$file_name);
				$pro->save();
				 return redirect()->route("getaddproduct")->with(["flash_message"=>"Add Successfully!","flash_warning"=>"success"]);
			}
			else
				return redirect()->back()->with(["flash_message"=>"File không đúng định dạng!","flash_warning"=>"danger"]);
		}
	}
    //end


    //list
	public function listpro()
	{
		$data= DB::table("products")->join("type_products","products.id_type","=","type_products.id")->select("type_products.name as typename","products.id","products.name","products.description","products.unit_price","products.promotion_price","products.image")->get();
		// dd($data);
		return view("admin.product.listpro",compact("data"));
	}

    //end


     //del
	public function delpro()
	{
		if(Request::has("id")){
			$id= Request::get('id');
			$del=product::find($id);
			if(!empty($del)){
				$url_image='public/template/image/product/'.$del->image;
				if(File::exists($url_image)){
					File::delete($url_image);
				}
				$del->delete();
				return redirect()->back()->with(["flash_message"=>"Xóa thành công!","flash_warning"=>"success"]);
			}
		}
	}
	//end

	//edit
	public function geteditpro($id)
	{
		$data= typeproduct::select("id","name")->get()->toArray();
		$datapro=product::find($id);
		$id_type_current= product::find($id)->id_type;
		// dd($datapro);
		return view('admin.product.editpro',compact("data","id_type_current","datapro"));
	}

	public function posteditpro($id)
	{
		# code...
		$validatedData = Request::validate([
        'name' => 'required',
        'description' => 'required',
        'unitprice' => 'required',
        'promotion' => 'required',
        'unit' => 'required',
    	]);

		$oldimg=product::find($id)->image;
		// dd($oldimg);
		$file= Request::file("fImages");

		
		if(!empty($oldimg))
		{
			$pro=product::find($id);
			if(Request::hasFile("fImages")){
				$extension=["jpg","png","gif"];
				$file_extension=$file->getClientOriginalExtension();
				$check= in_array($file_extension, $extension);
				$file_name= date("ymdhis").$file->getClientOriginalName();
				if($check){
					$url_img_old="public/template/image/product/".$oldimg;
					if(File::exists($url_img_old)){
						File::delete($url_img_old);
					}
					$pro->name= Request::input('name');
					$pro->id_type= Request::input('type');
					$pro->description= Request::input('description');
					$pro->unit_price= Request::input('unitprice');
					$pro->promotion_price= Request::input('promotion');
					$pro->image=$file_name;
					$pro->unit= Request::input('unit');
					$pro->new= 0;
					$file->move("public/template/image/product/",date("ymdhis").$file->getClientOriginalName());
					$pro->save();
					return redirect()->route("listpro")->with(["flash_message"=>"Edit Successfully!","flash_warning"=>"success"]);
				}
				else{
					return redirect()->back()->with(["flash_message"=>"File k đúng định dạng!","flash_warning"=>"danger"]);
				}
			}
			else{
				$pro->name= Request::input('name');
					$pro->id_type= Request::input('type');
					$pro->description= Request::input('description');
					$pro->unit_price= Request::input('unitprice');
					$pro->promotion_price= Request::input('promotion');
					// $pro->image=$file_name;
					$pro->unit= Request::input('unit');
					$pro->new= 0;
					$pro->save();
					return redirect()->route("listpro")->with(["flash_message"=>"Edit Successfully!","flash_warning"=>"success"]);

			}
		}



	}
	//end
}

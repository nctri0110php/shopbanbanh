<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request,File;
use App\typeproduct;
use App\product;

class typeproductController extends Controller
{
    //add
	public function getaddtype()
	{
		return view('admin.type.addtype');
	}
	public function postaddtype()
	{
		$validatedData = Request::validate([
        'txtName' => 'required',
        'txtDescription' => 'required',
        'fImages'=>'required',

    	]);

		$file= Request::file("fImages");
		// dd($file);
		if(Request::hasFile('fImages')){
			$extension=['jpg','png','gif'];
			$check=in_array($file->getClientOriginalExtension(), $extension);
			if($check){
				$file_name= date("ymdhis").$file->getClientOriginalName();
				$type= new typeproduct;
				$type->name= Request::input('txtName');
				$type->description= Request::input('txtDescription');
				$type->image=$file_name;
				$file->move('public/template/image/product/',$file_name);
				$type->save();
				 return redirect()->route("getaddtype")->with(["flash_message"=>"Add Successfully!","flash_warning"=>"success"]);
			}
			else
				return redirect()->route("getaddtype")->with(["flash_message"=>"File không đúng định dạng!","flash_warning"=>"danger"]);
		}
	}
    //end

    //list
	public function list()
	{
		$data= typeproduct::get();
		// dd($data);
		return view('admin.type.listtype', compact("data"));
	}
    //end


    //del
	public function del()
	{
		$id= Request::get('id');
		$product=product::select("id_type")->where("id_type",$id)->first();
		if(!empty($product->id_type)){
			return redirect()->back()->with(["flash_message"=>"Tồn tại các sản phẩm con bên bảng product!Để đảm bảo an toàn bạn nên xóa các sản phẩm thuộc loại này bên bảng product trước nhé!!!","flash_warning"=>"success"]);
		}
		else{
			if(Request::has("id")){
				$del=typeproduct::find($id);
				if(!empty($del)){
					$url_image='public/template/image/product/'.$del->image;
					if(File::exists($url_image)){
						File::delete($url_image);
					}
					$del->delete();
					return redirect()->route("list")->with(["flash_message"=>"Xóa thành công!","flash_warning"=>"success"]);
				}
			}
		}
		
		// dd($product);
		// dd($product);
		// if(Request::has("id")){
		// 	$del=typeproduct::find($id);
		// 	if(!empty($del)){
		// 		$url_image='public/template/image/product/'.$del->image;
		// 		if(File::exists($url_image)){
		// 			File::delete($url_image);
		// 		}
		// 		$del->delete();
		// 		return redirect()->route("list")->with(["flash_message"=>"Xóa thành công!","flash_warning"=>"success"]);
		// 	}
		// }
	}
	//end



	//edit
	public function getedittype($id)
	{
		$data= typeproduct::where('id',$id)->first();
		// dd($data);
		return view('admin.type.edittype',compact("data"));
	}

	public function postedittype($id)
	{
		# code...
		$validatedData = Request::validate([
        'txtName' => 'required',
        'txtDescription' => 'required',
    	]);

		$oldimg=typeproduct::find($id)->image;
		// dd($oldimg);
		$file= Request::file("fImages");

		
		if(!empty($oldimg))
		{
			$edttype=typeproduct::find($id);
			if(Request::hasFile("fImages")){
				$extension=["jpg","png","gif"];
				$file_extension=$file->getClientOriginalExtension();
				$check= in_array($file_extension, $extension);
				if($check){
					$url_img_old="public/template/image/product/".$oldimg;
					if(File::exists($url_img_old)){
						File::delete($url_img_old);
					}
					$edttype->name= Request::input("txtName");
					$edttype->description= Request::input("txtDescription");
					$edttype->image= date("ymdhis").$file->getClientOriginalName();
					$edttype->save();
					$file->move("public/template/image/product/",date("ymdhis").$file->getClientOriginalName());
					return redirect()->route("list")->with(["flash_message"=>"Edit Successfully!","flash_warning"=>"success"]);
				}
				else{
					return redirect()->back()->with(["flash_message"=>"FIle k đúng định dạng!","flash_warning"=>"danger"]);
				}
			}
			else{
				$edttype->name= Request::input("txtName");
				$edttype->description= Request::input("txtDescription");
				$edttype->save();
				return redirect()->route("list")->with(["flash_message"=>"Edit Successfully!","flash_warning"=>"success"]);

			}
		}



	}
	//end

}

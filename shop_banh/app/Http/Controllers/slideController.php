<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\slide;
use File;

class slideController extends Controller
{
    public function getaddslide()
    {
    	# code...
    	$data= slide::get();
    	// dd($data);
    	return view('admin.addslide',compact("data"));
    }

    public function postaddslide()
    {
    	$file_arr=Request::file("fImages");
    	// dd($file_arr);
     //   	echo "<pre>";
    	// print_r($file_arr);
    	// echo "</pre>";
    	$validatedData = Request::validate([
            "fImages"=>"required",
            
        //viet tiep
        ]);
    	if(Request::hasFile('fImages')) {
			$allowedfileExtension=['jpg','png','gif'];
			// $file_arr=Request::file("fImages");
            // flag xem có thực hiện lưu DB không. Mặc định là có
			$exe_flg = true;
			// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
			foreach($file_arr as $file) {
				$extension = $file->getClientOriginalExtension();
				$check=in_array($extension,$allowedfileExtension);
				
				if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
					$exe_flg = false;
					return redirect()->route("getaddslide")->with(["flash_message"=>"Add Successfully!","flash_warning"=>"danger"]);
				}
			} 
			// nếu không có file nào vi phạm validate thì tiến hành lưu DB
			if($exe_flg) {
                // lưu product
				foreach($file_arr as $file){
	                if(isset($file)){
	                    $slide = new slide;
	                    $file_name=date("dmyhis").$file->getClientOriginalName();//lay ngay thang de khoi xoa file trung nhau

	                   	//echo $file_name;	
	                   	$slide->link="";
	                   	$file->move('public/template/image/slide/',$file_name);
	                   	$slide->image=$file_name;

	                }
	                $slide->save();
            	} 
            	 return redirect()->route("getaddslide")->with(["flash_message"=>"Add Successfully!","flash_warning"=>"success"]);
			}
    	
       

   		 }
    }

    public function del()
    {
    	# code...
    	if(Request::has("id")){
    		$id =Request::get("id");
    		echo $id;
    		$del=slide::find($id);
    		if(!empty($del)){

    			$url_img="public/template/image/slide/".$del->image;
    			echo $url_img;
    			if(File::exists($url_img)){
    				File::delete($url_img);
    			}
    			$del->delete();
    			return redirect()->route("getaddslide")->with(["flash_warning"=>"delsuccess"]);
    		}
    	}
    }
}

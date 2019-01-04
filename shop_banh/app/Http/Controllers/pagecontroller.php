<?php

namespace App\Http\Controllers;

use Request;
use App\slide;
use App\product;
use App\typeproduct,DB;
use Cart,Mail;
use App\User,Hash,Auth;
use App\customer;
use App\bill;
use App\billdetail;
class pagecontroller extends Controller
{

	//trang chu
    public function getIndex(){
    	$slide=slide::get();
    	$newproduct=product::where('new','=',1)->paginate(4);
    	$promotionproduct=product::where('promotion_price','<>',0)->paginate(4);
    	//dd($newproduct);
  
    	// 	echo "<pre>";
    	// print_r($newproduct);
    	// echo "</pre>";

    	//echo $value['image'];
    
    	
    	return view('client.trangchu', compact("slide","newproduct","promotionproduct"));
    }
    //end

    //loại sản phẩm
    public function type($id){
    	$product=product::where("id_type","=",$id)->paginate(9);
    	$countpro=count(product::where("id_type","=",$id)->get());
    	$sanphamlienquan=product::where("id_type","<>",$id)->paginate(3);
    	$countsplq=count(product::where("id_type","<>",$id)->get());
    	$type=typeproduct::all();
    	$onetype=typeproduct::where("id",$id)->first();
    	return view('client.loaisanpham',compact("product","sanphamlienquan","type","onetype","countpro","countsplq"));
    	// 	echo "<pre>";
    	// print_r($product);
    	// echo "</pre>";
    }
    //end

    //sản phẩm
    public function product($id){
    	$product= product::where('id',$id)->first();
    	$relatedpro= product::paginate(3);
    	// 	echo "<pre>";
    	// print_r($product);
    	// echo "</pre>";
    	$promotionproduct=product::where('promotion_price','<>',0)->paginate(4);
    	$newproduct=product::where('new','=',1)->paginate(4);
    	return view('client.sanpham',compact("product","relatedpro","promotionproduct","newproduct"));

    }
    //end


   	//gioi thieu
    public function about(){
    	return view('client.gioithieu');
    }
    //end


    //lienhe
    public function contact(){
    	return view('client.lienhe');
    }
    //end


    //gio hang
    public function shoppingcart($id){
    	$product=product::where("id",$id)->first();
    	if(Request::ajax()){
	    	if(Request::get("page")=="sanpham"){
	    		if($product->promotion_price==0){
				    	Cart::add([
						  ['id' => $product->id, 'name' => $product->name, 'qty' => Request::get('soluong'), 'price' => $product->unit_price, 'options' => ['image' => $product->image]]
						]);
			    	}
			    	else
			    	{
			    		Cart::add([
						  ['id' => $product->id, 'name' => $product->name, 'qty' => Request::get('soluong'), 'price' => $product->promotion_price, 'options' => array('image' => $product->image)],
						]);
			    	}
	    		echo "ok";
	    	}
   		}
    	else{
	    	if($product->promotion_price==0){
		    	Cart::add([
				  ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->unit_price, 'options' => ['image' => $product->image]]
				]);
	    	}
	    	else
	    	{
	    		Cart::add([
				  ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->promotion_price, 'options' => array('image' => $product->image)],
				]);
	    	}
	    	return redirect()->route("gio_hang");
	    }
		
    }

    public function gio_hang(){
    	$ct=Cart::content();
		   // dd($ct);
		  	// echo "<pre>";
    	// print_r($ct);
    	// echo "</pre>";
    	return view('client.giohang',compact("ct"));
    }

    //end

    //delcart
    public function delcart($id){
    	Cart::remove($id);
    	
    }
    //end

    //upcart
    public function updatecart(){
    	
    	// echo Request::get("decrement");
    	if(Request::get("rid") && Request::get("increment")==1){
    		$rows = Cart::search(function($key, $value) {
                return $key->rowId == Request::get('rid');
            });
             // dd($rows);
    		$r=$rows->first();
    		// dd($r);
    		 Cart::update(Request::get("rid"),$r->qty+1);

    	}
    	if(Request::get("rid") && Request::get("decrement")==1){
    		$rows = Cart::search(function($key, $value) {
                return $key->rowId == Request::get('rid');
            });
             // dd($rows);
    		$r=$rows->first();
    		// dd($r);
    		 Cart::update(Request::get("rid"),$r->qty-1);

    	}
    	return redirect()->route("gio_hang");
    }
    //end

    //destroy
    public function destroycart()
    {
    	Cart::destroy();
    	return redirect()->route("gio_hang");

    }
    //end


    //search
    public function search(){
    	$search=product::where('name','like','%'.Request::get('search').'%')->orwhere('unit_price',Request::get('search'))->paginate(9);
    	$c=count($search);
    	// echo $c;
    	// 	echo "<pre>";
    	// print_r($search);
    	// echo "</pre>";

    	return view('client.search',compact("search","c"));
    }
    //end



    //dathang
    public function getcheckout(){
        $ct=Cart::content();
    	return view('client.dathang',compact("ct"));
    }
    public function postcheckout(){
        // echo "<pre>";
        // print_r(Request::input());
        // echo "<pre>";
        // return view('client.dathang');
        Request::validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'notes' => 'required',
            'phone' => 'required|regex:/0[0-9\s.-]{9,13}/',
            'address' => 'required',
        ]);
        $cus=new customer;
        $cus->name= Request::input('name');
        $cus->gender= Request::input('gender');
        $cus->email= Request::input('email');
        $cus->address= Request::input('address');
        $cus->phone_number= Request::input('phone');
        $cus->note= Request::input('notes');
        $cus->save();
        $idcus=$cus->id;

        $bl=new bill;
        $bl->id_customer= $idcus;
        $bl->date_order= date("y-m-d");
        $bl->total= Cart::subtotal(0,",","");
        $bl->payment= Request::input('payment_method');
        $bl->note=Request::input('notes');
        $bl->save();

        $content=Cart::content();
        foreach ($content as $key => $value) {
            # code...
            $blde=new billdetail;
            $blde->id_bill= $bl->id;
            $blde->id_product= $value->id;
            $blde->quantity= $value->qty ;
            $blde->unit_price= $value->qty * $value->price;
            $blde->save();
        }
        Cart::destroy();
        return redirect()->route("userhome")->with(['check'=>'success']);
    }
    //end




    ///mailer
    public function getmailer(){
    	return view('client.contact');
    }
    public function postmailer(){
    	Request::validate([
		    'name' => 'required',
		    'email' => 'required|email',
		    'message' => 'required',
		]);
    	$data=["name"=>Request::input('name'),"email"=>Request::input('email'),"mess"=>Request::input('message')];
        // $data=["firstname"=>"trí","lastname"=>"vvv"];
        Mail::send("client.mailcontent",$data,function($msg){
            $msg->from("nctri0110php@gmail.com","khachhang");
            $msg->to("nctri0110@gmail.com","supperadmin")->subject("Mail từ khách hàng!");
        });
        $alert="ok";
        return redirect()->route('home')->with(['al'=>$alert]);
    }
    // end


    //login
    public function getdangki(){
    	return view('client.register');
    }
    public function postdangki(){
    	Request::validate([
		    'name' => 'required',
		    'email' => 'required|email|unique:users,email|unique:admins,email',
		    'password' => 'required|min:6',
		    'repassword' => 'required|same:password',
		    'phone' => 'required|Numeric',
		    'address' => 'required',
		]);

    	$u=new User;
    	$u->full_name=Request::input("name");
    	$u->email=Request::input("email");
    	$u->password=Hash::make(Request::input("password"));
    	$u->phone=Request::input("phone");
    	$u->address=Request::input("address");
    	$u->save();
    	return redirect()->back()->with(["registersuccess"=>"ok"]);

    }

    //


    //login
    public function getlogin(){
    	return view('client.login');
    }
    public function postlogin(){
    	Request::validate([
		    'email' => 'required|email',
		    'password' => 'required',
		]);
    	$data = array('email' =>Request::input('email') ,'password'=>Request::input('password'));
    	//dd($data);
		if(Auth::attempt($data)){
    		return redirect()->route("userhome")->with(["flag"=>"success","mess"=>"đăng nhập thành công!"]);
    	}else{
    		return redirect()->back()->with(["flag"=>"danger","mess"=>"đăng nhập thất bại"]);
    	}

    }
    //end


    //logout
     public function logout(){
     	Auth::logout();
    	return redirect()->route("getlogin");
    }
    //end

}

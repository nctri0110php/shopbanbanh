<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'userhome','uses'=>'pagecontroller@getIndex']);
Route::get('type/{id}',['as'=>'type','uses'=>'pagecontroller@type']);
Route::get('product/{id}',['as'=>'product','uses'=>'pagecontroller@product']);
Route::get('about',['as'=>'about','uses'=>'pagecontroller@about']);

//contact
Route::get('contact',['as'=>'contact','uses'=>'pagecontroller@contact']);
//mailer
Route::get('mailer',['as'=>'getmailer','uses'=>'pagecontroller@getmailer']);
Route::post('mailer',['as'=>'postmailer','uses'=>'pagecontroller@postmailer']);

//end


Route::get('shoppingcart/{id}',['as'=>'shoppingcart','uses'=>'pagecontroller@shoppingcart']);
Route::get('gio_hang',['as'=>'gio_hang','uses'=>'pagecontroller@gio_hang']);
Route::get('delcart/{id}',['as'=>'delcart','uses'=>'pagecontroller@delcart']);
Route::get('updatecart',['as'=>'updatecart','uses'=>'pagecontroller@updatecart']);
Route::get('destroycart',['as'=>'destroycart','uses'=>'pagecontroller@destroycart']);

//search
Route::get('search',['as'=>'search','uses'=>'pagecontroller@search']);
//end

//checkout
Route::get('checkout',['as'=>'getcheckout','uses'=>'pagecontroller@getcheckout']);
Route::post('checkout',['as'=>'postcheckout','uses'=>'pagecontroller@postcheckout']);
//end

//register
Route::get('userregister',['as'=>'getdangki','uses'=>'pagecontroller@getdangki']);
Route::post('userregister',['as'=>'postdangki','uses'=>'pagecontroller@postdangki']);
//end
//login
Route::get('userlogin',['as'=>'getlogin','uses'=>'pagecontroller@getlogin']);
Route::post('userlogin',['as'=>'postlogin','uses'=>'pagecontroller@postlogin']);
//end
//logout
Route::get('userlogout',['as'=>'userlogout','uses'=>'pagecontroller@logout']);
//end



// -----------------------------------------------admin--------------------------------------------------------

Route::group(["prefix"=>'admin','middleware'=>'admin'], function(){
	Route::get("googlemmap",["as"=>"googlemmap","uses"=>"moreController@googlemmap"]);
	Route::get("vectormap",["as"=>"vectormap","uses"=>"moreController@vectormap"]);
	Route::get("calendar",["as"=>"calendar","uses"=>"moreController@calendar"]);
	Route::group(["prefix"=>'show'], function(){
		Route::get("dashboard",["as"=>"dashboard","uses"=>"dashboardController@dashboard"]);
	});
	Route::group(["prefix"=>'slide'], function(){
		Route::get("add",["as"=>"getaddslide","uses"=>"slideController@getaddslide"]);
		Route::post("add",["as"=>"postaddslide","uses"=>"slideController@postaddslide"]);

		Route::get("del",["as"=>"delslide","uses"=>"slideController@del"]);
	});
	Route::group(["prefix"=>'type'], function(){
		Route::get("add",["as"=>"getaddtype","uses"=>"typeproductController@getaddtype"]);
		Route::post("add",["as"=>"postaddtype","uses"=>"typeproductController@postaddtype"]);

		Route::get("list",["as"=>"list","uses"=>"typeproductController@list"]);
		//del
		Route::get("del",["as"=>"del","uses"=>"typeproductController@del"]);
		//end

		//list
		Route::get("edit/{id}",["as"=>"getedittype","uses"=>"typeproductController@getedittype"]);
		Route::post("edit/{id}",["as"=>"postedittype","uses"=>"typeproductController@postedittype"]);
		//end

	});
	Route::group(["prefix"=>'product'], function(){
		Route::get("add",["as"=>"getaddproduct","uses"=>"productController@getaddproduct"]);
		Route::post("add",["as"=>"postaddproduct","uses"=>"productController@postaddproduct"]);

		Route::get("list",["as"=>"listpro","uses"=>"productController@listpro"]);

		
		// //del
		Route::get("del",["as"=>"delpro","uses"=>"productController@delpro"]);
		// //end

		// edit
		Route::get("edit/{id}",["as"=>"geteditpro","uses"=>"productController@geteditpro"]);
		Route::post("edit/{id}",["as"=>"posteditpro","uses"=>"productController@posteditpro"]);
	    //end

	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')->name('adminlogin');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('adminlogout');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/','HomeController@index');



Route::get('home','HomeController@index');

//bably
//--view department
//--view department
Route::get('dept/','DeptController@index');

//create department
Route::get('dept/create',function(){	
  
 
  return view('dept/create');
  
});

Route::post('dept/create','DeptController@create');

//--Edit department


Route::get('dept/edit/{id}',function($id){
 $row=App\Dept::find($id);
 
 //print_r($row);
 
 return view("dept.edit")->with("row",$row);
	 
});


Route::post('dept/edit','DeptController@updates');


//--delete department
Route::get('dept/delete/{id}','DeptController@delete');

//-----------------------//

//--update project//
Route::post('dept/update','DeptController@update');



//--Salary Routers--//
Route::get('salary/','SalaryController@index');
//create salary
Route::get('salary_detail/create',function(){	
  
 
  return view('salary_detail/create');
  
});
Route::post('salary_detail/update','SalaryController@update');

Route::post('salary_detail/create','SalaryController@create');
//--delete salary
Route::get('salary_detail/delete/{id}','SalaryController@delete');

//-----------------------//
//--Edit salary


Route::get('salary_detail/edit/{id}',function($id){
 $row=App\Salary::find($id);
 
 //print_r($row);
 
 return view("salary_detail.edit")->with("row",$row);
	 
});


Route::post('salary_detail/edit','SalaryController@updates');



//--view employee-----------//
Route::get('emp/','EmpController@index');

//create department
Route::get('emp/create',function(){	
  
 
  return view('emp/create');
  
});

Route::post('emp/create','EmpController@create');

//--Edit project


Route::get('emp/edit/{id}',function($id){
 $row=App\Emp::find($id);
 
 //print_r($row);
 
 return view("emp.edit")->with("row",$row);
	 
});


Route::post('emp/edit','EmpController@updates');


//--delete project
Route::get('emp/delete/{id}','EmpController@delete');

//-----------------------//

//--update project//
Route::post('emp/update','EmpController@update');






//-------------------------------Unit Routers----------------------------------------//

//--view Developers
Route::get('dev/','DevController@index');

//create Developers
Route::get('dev/create',function(){ 
  
 
  return view('dev/create');
  
});
Route::post('dev/create','DevController@create');


//-----------------------//

//------------------------------------- Task-------------------------------------------










Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//------------------------product-----------------------------
//view  Products 
Route::get('products','ProductController@index');

//create Product
Route::get('product/create',function(){ 
  
 
  return view('product/create');
  
});

Route::post('products/create','ProductController@create');

//--------------upload image--------------

/*Route::get('imageupload', ['as'=>'imageupload','uses'=>'ProductController@imageupload']);

Route::put('imageupload', ['as'=>'imageupload','uses'=>'ProductController@imageupload']);*/

//------------------------------------------

//--Edit product
Route::get('product/edit/{id}',function($id){
 $row=App\Product::find($id);
 
 return view("product/edit")->with("row",$row);
  
});


Route::post('products/update','ProductController@update');


//--delete project
Route::get('product/delete/{id}','ProductController@delete');



//upload file-------------//

 Route::post('upload', 'ProductController@imageuploads');
 
// Route::post('products/image-upload/{productId}','ProductController@uploadImages');

//--------------------------------------------





//-----------------------------------------
//---------------------category----------------
//view reguler task cat
Route::get('categories','CategoriesController@index');

//create task
Route::get('category/create',function(){ 
  
 
  return view('category/create');
  
});
Route::post('categories/create','CategoriesController@create');





//--Edit Reguller task category
Route::get('category/edit/{id}',function($id){
 $row=App\Categories::find($id);
 
 return view("category/edit")->with("row",$row);
  
});


Route::post('categories/update','CategoriesController@update');


//--delete project
Route::get('category/delete/{id}','CategoriesController@delete');

//----------------------------------------------------------------------
//------------------patrner------------------------------

//view partner
Route::get('partners','PartnerController@index');

//create partner
Route::get('partner/create',function(){ 
  
 
  return view('partner/create');
  
});
Route::post('partners/create','PartnerController@create');





//--Edit partner
Route::get('partner/edit/{id}',function($id){
 $row=App\Partner::find($id);
 
 return view("partner/edit")->with("row",$row);
  
});


Route::post('partners/update','PartnerController@update');


//--delete project
Route::get('partner/delete/{id}','PartnerController@delete');


 /*$categories = DB::table('categories')
            ->join('product', 'categories.id', '=', 'product.cat_id')
            ->get('name');


            /*->join('partners', 'partners.id', '=', 'product.partner_id')
            ->select('categories.name as categories_id', 'partners.name as partner_id ')  
            ->get();*/
       /* return view('product.create')->with('categoriess',$categories);*/


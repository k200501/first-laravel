<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontController@index'
    // return view('front.parallex');
);
// Route::get('/parallex', function () {
//     $news = DB::table('news')->get();
//     // dd($news);
//     return view('front.parallex2',compact('news'));
// });
Route::get('/parallex', 'frontController@news');
Route::get('/product', 'frontController@product'
    // $price = 100;
    // $total = $price*0.8;
    // return view('front.product',['name' => 'Potato', 'name2'=>'chocolate','total'=>$total]);
);
Route::get('/parallex/{id}','frontController@newsDetail');
Route::get('product/{id}', 'frontController@productDetail');
Route::get('/test/{name}/{id}','frontController@test');
Route::post('/push','frontController@push');
Route::get('/change','frontController@change' );
Route::get('/contactus','frontController@contactas2' );
// Route::get('app', function(){
//     return view('layout.app');
// });





//end
Route::get('/admin', function () {
    return view('admin.index');

});
Route::get('/admin/contactus', 'ContactusController@Contactus');
Route::get('/admin/contactus/edit','ContactusController@edit');
Route::post('/send','ContactusController@send');
Route::get('/admin/contactus/{id}','ContactusController@contactusdetail');
Route::post('admin/contactus/update/{id}','ContactusController@update');
Route::delete('/admin/contactus/delete/{id}','ContactusController@contactusdelete');
// Route::post('admin/contactus/delete/{id}', 'ContactusController@delete');

//產品介紹後台
Route::get('/admin/products', 'ContactusController@product');
//新增資料
Route::get('/admin/products/add','ContactusController@add');
Route::post('/admin/products/add_detail', 'ContactusController@add_detail');
//編輯資料
Route::get('/admin/products/edit/{$id}','ContactusController@product_edit');
Route::post('/admin/products/edit/edit/{id}', 'ContactusController@product_edit_detail');

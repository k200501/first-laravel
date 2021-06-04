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

Route::get('/', function () {
    return view('front.parallex');
});
Route::get('/parallex', function () {
    $news = DB::table('news')->get();
    // dd($news);
    return view('front.parallex2',compact('news'));
});
Route::get('/product', function () {
    $price = 100;
    $total = $price*0.8;
    return view('front.product',['name' => 'Potato', 'name2'=>'chocolate','total'=>$total]);
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    //
    public function index(){
        return view('front.parallex');

    }
    public function news(){
        $news = DB::table('news')->get();
    // dd($news);
    return view('front.news.parallex2',compact('news'));


    }
    public function product(){
        $product = DB::table('products')->get();
    //     $price = 100;
    // $total = $price*0.8;
    // ['name' => 'Potato', 'name2'=>'chocolate','total'=>$total]
        foreach ($product as $key => $item) {
            $price[$key] = $item->price;
            $discount = $item->discount;
            $discount_chinese[$key] = intval($discount*100);
            // $total_price = $discount*$price;
            $total_price[$key] = intval($price[$key] *$discount);
            // dd($total_price);


            # code...
        }

    // dd($total_price);
        return view('front.product.product',compact('product','total_price','price','discount_chinese'));

    }
    public function newsDetail($id){
        // 把從網止從id 帶進來
        // dd($id);
        $record = DB::table('news')->find($id);
        return view('front.news.detail',compact('record'));

    }
    public function productDetail($id){
        // dd($id);
        $productid = DB::table('products')->find($id);
        // $product2 = DB::table('products')->get();
        // foreach ($product2 as $key => $pd) {
        //     $price[$key] = $pd->price;
        //     $discount[$key] = $pd->discount;
        //     $pricetotal[$key] = intval($price[$key]*$discount[$key]);            # code...
        // }
        return view('front.product.detail',compact('productid'));
    }
    public function test($name, $id){
        dd($name, $id);
    }

}

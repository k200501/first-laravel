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
        $price = 100;
    $total = $price*0.8;
    return view('front.product',['name' => 'Potato', 'name2'=>'chocolate','total'=>$total]);

    }
    public function newsDetail($id){
        // 把從網止從id 帶進來
        // dd($id);
        $record = DB::table('news')->find($id);
        return view('front.news.detail',compact('record'));

    }
    public function test($name, $id){
        dd($name, $id);
    }

}

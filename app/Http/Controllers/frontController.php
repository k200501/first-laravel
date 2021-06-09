<?php

namespace App\Http\Controllers;


use App\contactus;
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
        // foreach ($product as $key => $item) {
        //     $price[$key] = $item->price;
        //     $discount = $item->discount;
        //     $discount_chinese[$key] = intval($discount*100);
        //     // $total_price = $discount*$price;
        //     $total_price[$key] = intval($price[$key] *$discount);
        //     // dd($total_price);


        //     # code...
        // }
        $discount_price = [];
        foreach ($product as $key => $value) {
            array_push($discount_price,round($value->price*$value->discount));

            # code...
        }

    // dd($total_price);
        // return view('front.product.product',compact('product','total_price','price','discount_chinese'));
        return view('front.product.product',compact('product','discount_price'));

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
    public function contactas(){
        $list = DB::table('contactuses')->get();
    }
    public function contactas2(){
        $contactus = DB::table('contactuses');
        return view('front.contactus.index',compact('contactus'));
    }

    public function push(Request $request){
        contactus::create([
            'name' =>$request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'content' =>$request->content


            // 'name' => '123',
            // 'email' => 'abc@gmail.com',
            // 'phone' =>'0987878787',
            // 'content' =>'adsasdgasgjhksdg'
        ]);
        return redirect('/contactus')->with('message','成功了');
    }
    public function change(){
        // $old_record = contactus::find(1);
        // $old_record->name = '林陞';
        // $old_record->save();
        // dd($old_record);
        // $old_record = contactus::find(1)->update([
        //     'name' => 'kevin'
        // ]);
        // $old_record = contactus::where('name','黃'.'%')->get();
        $old_record = contactus::where('name',123)->get();
        foreach ($old_record as $key => $value) {
            $value-> name = '567';
            $value-> phone = '80650506';
            $value->save();
            # code...
        }


    }

    public function test($name, $id){
        dd($name, $id);
    }

}

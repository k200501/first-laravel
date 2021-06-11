<?php

namespace App\Http\Controllers;

use App\contactus;
use App\Productss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class ContactusController extends Controller
{
    //
   public function Contactus(){
       $list = contactus::orderby('id','asc')->get();
    return view('admin.contactus.index',compact('list'));
   }
//    public function edit(){
//        return view('admin.contactus.edit');

//    }
   public function send(Request $request){
       contactus::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'content'=>$request->content
       ]);
       return redirect('/admin/contactus')->with('message','成功了');


   }
   public function contactusdetail($id){
    $contactusid = contactus::find($id);
    return view('admin.contactus.edit',compact('contactusid'));

   }
   public function update(Request $request,$id){
       $old_record = contactus::find($id);
       $old_record->name = $request->name;
       $old_record->email = $request->email;
       $old_record->phone = $request->phone;
       $old_record->content = $request->content;
       $old_record->save();
       return redirect('/admin/contactus')->with('message','成功了');



   }
   public function contactusdelete($id){
       $contactusdelete = contactus::find($id);
       $contactusdelete->delete();

       return redirect('/admin/contactus')->with('message','刪除成功');
   }
//    public function delete(Request $request,$id){
//        $old_record = contactus::find($id);

//     return redirect('/admin/contactus')->with('message','刪除成功');

//    }
//產品介紹controller
    public function product(){
        $products = Productss::orderby('id','asc')->get();
        return view('admin.products.index',compact('products'));
    }

    public function add(){
        return view('admin.products.add');
    }
        //        return view('admin.contactus.edit');

        //    }
    // public function add($id){
    //     $productsid = Productss::find($id);
    //     return view('/admin/products/add',compact('productsid'));

    //    }
    public function add_detail(Request $request){
        // $products = DB::table('products')->get();
        Productss::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'discript'=>$request->discript
        ]);
        return redirect('/admin/products')->with('message','新增產品資料成功');


    }
    public function product_edit($id){
        $productsid = Productss::find($id);
    return view('admin.products.edit',compact('productsid'));

    }
    public function product_edit_detail(Request $request,$id){
        $old_record = Productss::find($id);
       $old_record->name = $request->name;
       $old_record->price = $request->price;
       $old_record->discount = $request->discount;
       $old_record->discript = $request->discript;
       $old_record->save();
       return redirect('/admin/products')->with('message','修改成功了');

    }
    // public function push(Request $request){
    //     contactus::create([
    //         'name' =>$request->name,
    //         'email' => $request->email,
    //         'phone' =>$request->phone,
    //         'content' =>$request->content


    //         // 'name' => '123',
    //         // 'email' => 'abc@gmail.com',
    //         // 'phone' =>'0987878787',
    //         // 'content' =>'adsasdgasgjhksdg'
    //     ]);
    //     return redirect('/contactus')->with('message','成功了');
    // }


}

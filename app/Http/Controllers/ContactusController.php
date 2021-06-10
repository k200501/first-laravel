<?php

namespace App\Http\Controllers;

use App\contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    return view('/admin/contactus/edit',compact('contactusid'));

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
        $product = DB::table('products')->get();
        return view('admin.products.index',compact('product'));
    }


}

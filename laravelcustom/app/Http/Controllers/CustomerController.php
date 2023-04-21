<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
   public function create(){

    if(Auth::check()){

        return view('customer');
    }

    return redirect("login")->withSuccess('not allowed to access');

   }

   public function store(Request $request){
    
    // echo "<pre>";
    // print_r($request->all());
    //insert customer
    $customer = new Customer;
    $customer->name = $request['name'];
    $customer->email = $request['email'];
    $customer->phone = $request['phone'];
    $customer->address = $request['address'];
    $customer->save();

    return redirect('/customer/view')->with('success','Customer has been created successfully.');

   }

   public function trash(){

    $customer = Customer::onlyTrashed()->get();
    $data = compact('customer');
    return view('customer-trash')->with($data);
   }

   public function view(Request $request){
      if(Auth::check()){
         $logname = Auth::user()->name;
         
         $search = $request['search'] ?? ""; 
       if($search != ""){

        $customers = Customer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->orwhere('phone','LIKE',"%$search%")->orwhere('address','LIKE',"%$search%")->get();

       }else{

        $customers = Customer::orderBy('id', 'desc')->paginate(5);

       } 
       // echo "<pre>";
       // print_r($logname);
       // die;
          // return view('dashboard');
       //display all cutomer//
       $data = compact('customers','logname','search');
       return view('view')->with($data);
   }

   return redirect("login")->with('error','not allowed to access');

  }

   public function delete($id){

      // echo $id;
      // die;
      //display all cutomer//
      $customer = Customer::find($id);
      if(!is_null($customer)){
         $customer->delete();
      }
      return redirect('/customer/view')->with('success','Customer has been move to trash.');
   }

   public function restore($id){

      // echo $id;
      // die;
      //display all cutomer//
      $customer = Customer::withTrashed()->find($id);
      if(!is_null($customer)){
         $customer->restore();
      }
      return redirect('/customer/view')->with('success','Customer has been restore successfully.');
   }

   public function forcedelete($id){

    // echo $id;
    // die;
    //display all cutomer//
    $customer = Customer::withTrashed()->find($id);
    if(!is_null($customer)){
       $customer->forcedelete();
    }
    return redirect('/customer/view')->with('success','Customer has been deleted successfully.');
 }

   public function edit($id){

      $customer = Customer::find($id);
      $data = compact('customer');
      return view('customeredit')->with($data);
   }

   public function update($id, Request $request){

      $customer = Customer::find($id);
      $customer->name = $request['name'];
      $customer->email = $request['email'];
      $customer->gender = $request['gender'];
      $customer->address = $request['address'];
      $customer->dob = $request['dob'];
      $customer->password = $request['password'];
      $customer->save();

      return redirect('/customer/view')->with('success','Customer has been update successfully.');

   }


}

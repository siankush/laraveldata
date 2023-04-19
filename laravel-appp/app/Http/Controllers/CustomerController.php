<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function create(){

    return view('customer');

   }

   public function store(Request $request){
    
    // echo "<pre>";
    // print_r($request->all());
    //insert customer
    $customer = new Customer;
    $customer->name = $request['name'];
    $customer->email = $request['email'];
    $customer->gender = $request['gender'];
    $customer->address = $request['address'];
    $customer->dob = $request['dob'];
    $customer->password = $request['password'];
    $customer->save();

    return redirect('/customer/view')->with('success','Customer has been created successfully.');

   }

   public function view(){

      //display all cutomer//
      $customer = Customer::orderBy('customer_id', 'desc')->get();
      $data = compact('customer');
      return view('view')->with($data);
   }

   public function delete($id){

      // echo $id;
      // die;
      //display all cutomer//
      $customer = Customer::find($id);
      if(!is_null($customer)){
         $customer->delete();
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

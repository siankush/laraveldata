<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Mail;
use App\Mail\testmail;

use Hash;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



class CustomerController extends Controller
{

   public function schooladmin(){

      $slugnaam = Auth::guard('customer')->user()->name;
      
      $data = compact('slugnaam');
      return view('schoolpage')->with($data);
      
      
   }
   
   public function index(Request $request)
   {
      
      return view('Auth.login');
   }  
   
   
   public function customLogin(Request $request)
   {
 
      $request->validate([
         'email' => 'required',
         'password' => 'required',
       
       ]);
       // $request['isAdmin'] = 1;
       // print_r($request->all());
       // die;
       
       
       if(Auth::guard('customer')->attempt($request->only(['email', 'password'])))
       {
          
          $slugnaam = Auth::guard('customer')->user()->slugname;
          
          
          // echo "<pre>";
          // print_r($slugnaam);
          // die; 
          
            
               
               return redirect('/schooladmin'.'/'.$slugnaam);
               
            }
            
            
            return redirect("customer/login")->with('error','details are not valid');
         }
         public function create(){
            
            return view('customer');
            
            
            //  return redirect("login")->withSuccess('not allowed to access');
            
         }
         
         public function store(Request $request){
            
   //          $request->validate([
   //             'name' => 'required',
   //             'email' => 'required',
   //             'phone' => 'required',
   //             'address' => 'required',
   //             'type' => 'required',
   //             'image' => 'required',
   //             'password' => 'required',
   //             'slugname' => 'required',
   //          ],[
   //             'name.required' => 'Name is required',
   //             'email.required' => 'Email is required',
   //             'email.email' => 'Enter valid email',
   //             'email.unique' => 'Email exist_',
   //             'phone.required' => 'Phone is required',
   //             'address.required' => 'Address is required',
   //    'type.required' => 'Type is required',
   //    'image.required' => 'Please select image',
   //    'password.required' => 'Password is required',
   //    'slugname.required' => 'Slugname is required',

   // ]);
   //  echo "<pre>";
   //  // print_r($request->all());
   //  //insert customer
   //  print_r($request->toArray());
   //  die;
   $customer = new Customer;
   $customer->name = $request['name'];
   $customer->email = $request['email'];
   $customer->phone = $request['phone'];
   $customer->address = $request['address'];
   $customer->type = $request['type'];
   $customer->password = Hash::make($request['password']);
   //  $customer->image = $request['image'];
   
   if ($image = $request['image']) {
      $destinationPath = 'images/';
      $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
      $image->move($destinationPath, $profileImage);
      $input['image'] = "$profileImage";
   }
   $customer->image = $input['image'];
   $customer->user_id = Auth::user()->id;
   $customer->slugname = Str::slug($request['name']);
   
   $maildata = [
      'title' => $request['email'],
      'body' => $request['password'],
      'link' => route('login'),
    ];
    Mail::to($request['email'])->send(new testmail($maildata));

    $customer->save();


    return redirect('/customer/table')->with('success','Customer has been created successfully.');

   }

   public function trash(){

    $customer = Customer::onlyTrashed()->get();
    $data = compact('customer');
    return view('customer-trash')->with($data);
   }

   public function view(Request $request){
      //  if(Auth::check()){
          $logname = Auth::user()->name;
          
          $search = $request['search'] ?? ""; 
        if($search != ""){

         $customers = Customer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();

        }else{

           $customers = Customer::orderBy('id', 'desc')->get();
           
      } 
      // echo "<pre>";
      // print_r($logname);
      // die;
      // return view('dashboard');
      //display all cutomer//
        $data = compact('customers','search');
        return view('table')->with($data);
   //  }

   //  return redirect("login")->with('error','not allowed to access');

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
      $customer->phone = $request['phone'];
      $customer->address = $request['address'];
      $customer->save();

      return redirect('/customer/view')->with('success','Customer has been update successfully.');
      
   }

   public function customersignout() {
      Session::flush();
      Auth::logout();
 
      return Redirect('/customer/login');
  }
   public function adminsignout() {
      Session::flush();
      Auth::logout();
 
      return Redirect('/customer/login');
  }


}

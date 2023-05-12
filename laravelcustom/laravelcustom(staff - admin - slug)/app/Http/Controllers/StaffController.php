<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    // public function schooladmin(){

    //     $slugnaam = Auth::guard('customer')->user()->name;
             
    //     $data = compact('slugnaam');
    //     return view('adminpage')->with($data);
              
  
    //  }
  
     public function stafflogin(Request $request)
     {
  
         return view('Auth.stafflogin');
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
            
            
            if(Auth::guard('staff')->attempt($request->only(['email', 'password'])))
            {
                
                
               $auth = Auth::guard('staff')->user();
               $id = $auth->customer_id;
                $user = Customer::find($id);
                $slug = $user->slugname;
               
               //  echo "<pre>";
               //  echo 'kkk';
               //  print_r($user);
               //  die;
                
          
          
                 // echo "<pre>";
                 // print_r($slugnaam);
                 // die; 
                 
                   
                      
                    //   return redirect()->intended('/schooladmin'.'/'.$slugnaam);
                 
              
                 return redirect('/stafflog'.'/'.$slug);

                 
              }
              
          
             return redirect("/stafflogin")->with('error','details are not valid');
     }
     public function create(){
  
        $schools = Customer::all();
        $schools = compact('schools');
        return view('Auth.staffregister')->with($schools);
  
  
     //  return redirect("login")->withSuccess('not allowed to access');
  
     }
  
     public function store(Request $request){
      

        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'phone' => 'required',
           'address' => 'required',

           'password' => 'required',
        ],[
        'name.required' => 'Name is required',
        'email.required' => 'Email is required',
        'email.email' => 'Enter valid email',
        'email.unique' => 'Email exist_',
        'phone.required' => 'Phone is required',
        'address.required' => 'Address is required',
        'password.required' => 'Password is required',
  
    ]);
     //  echo "<pre>";
     //  // print_r($request->all());
     //  //insert customer
     //  print_r($request->toArray());
     //  die;
      $staff = new staff;
      $staff->customer_id = $request['school'];
      $staff->name = $request['name'];
      $staff->email = $request['email'];
      $staff->phone = $request['phone'];
      $staff->address = $request['address'];
      $staff->password = Hash::make($request['password']);
  
      $staff->save();
  
  
      return redirect('/stafflogin')->with('success','Staff has been register successfully.');
  
     }
     public function staffview(){


        
      $auth = Auth::guard('staff')->user();
      $id = $auth->customer_id;
      $user = Customer::find($id);
      $userid = $user->id;
      // echo "<pre>";
      // // echo 'php';
      // print_r($user->toArray());
      // die;

      // $customer = Auth::guard('customer')->user();
      
      $schools = Staff:: where('customer_id', $user->id)->get();
      
      $name = Auth::guard('staff')->user()->name;
      // $id = $auth->customer_id;
      //  $user = Customer::find($id);
      //  $allusers = count($user);

      $data = compact('schools', 'name');         

        return view('userlog')->with($data);
     }

     public function staffsignout() {
        Session::flush();
        Auth::logout();
   
        return Redirect('stafflogin');
    }
  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
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
        
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $isadmininfo = Auth::user()->isAdmin;
            if($isadmininfo == 1){

                return redirect()->intended('customer/view')
                ->withSuccess('Signed in');
                
            }else{
                return redirect()->intended('adminpage')
                ->withSuccess('Signed in');

            }
        }
   
        return redirect("login")->with('error','Login details are not valid');
    }
 
 
 
    public function registration()
    {
        return view('Auth.registration');
    }
       
 
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password',
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Enter valid email',
            'email.unique' => 'Email exist_',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('have signed-in');
    }
 
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
   
        return redirect("login")->withSuccess('are not allowed to access');
    }

    public function adminpage(){

        if(Auth::check()){

            return view('adminpage');
        }

        return redirect("login")->with('error','are not allowed to access');
  
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }
}

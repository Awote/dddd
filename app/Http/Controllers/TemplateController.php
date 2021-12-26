<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Hash;
class TemplateController extends Controller
{
    public function index (){
    	return view('index');
    }
    
    public function about (){
    	return view('about');
    }
    public function trainer (){
    	return view('products');
    }
    public function login (){
    	return view('login');
    } 
    public function registration()
    {
        return view('registration');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    public function customLogin(Request $request)
    {
    	$request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
            
        ]);
   	$credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) ) {
        	$user = Auth::user();
        	if ($user['permition'] == 'admin'){
        		return view('registration');
        	}
        	else {
        		return redirect()->intended('dashboard');
        	}
        	
            
                        
        }
  	
        return redirect()->intended('login');
        
        } 
      	public function test(){
      	return Hash::make('test');
      	}       
    	 public function dashboard(Request $request)
    {
    	if (Auth::check()){
        return view('dashboard');
    }
      	}	
	

}


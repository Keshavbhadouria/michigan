<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\admin;
use App\Models\Cpage;
use Session;
use Auth;

class AdminController extends Controller
{

// Loading admin Login Page

    public function index()
    {
    	return view('admin.login');
    }

// Creating Login Function for admin

    public function makeLogin(Request $request)
    {
    	//validate login form

    	$validator =  Validator::make($request->all(),[
    		"password" => "required",
    		"username" => "required", 
    	]);
    	if($validator->fails())
    	{
    		return back()
    		       ->withErrors($validator)
    		       ->withInput();
    	}

    	//check username and password for login

    	$data = array(
    					'username'=>$request->username,
    					'password'=>$request->password
    				 );

    	if(Auth::guard('admin')->attempt($data))
    	{
    		return redirect('dashboard');
    	}
    	else
    	{
    		return back()->withErrors(['message' => 'invalid email or password.']);
    	}

    }

// Dashboard page

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

//Logout

    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('admin');
    }
    
    public function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }
      $areaname = $request->areaname;
      $name = $request->name;
      $address = $request->address;
      $phone = $request->phone;
      Cpage::where('id','!=',0)->delete();
      for($count = 0; $count < count($name); $count++)
      {
       $data = array(
        'areaname'=>$areaname[$count],
        'name' => $name[$count],
        'address'  => $address[$count],
        'phone'  => $phone[$count],
        
       );
       Cpage::create($data);
      }
      
      
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }

}

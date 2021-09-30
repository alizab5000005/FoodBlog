<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class ADMINUSERCONTROLLER extends Controller
{
      /////////////////////////////////
     //  view admin user login page //
    /////////////////////////////////

    public function admin_login()
    {
    	return view('admin/admin_login');
    }

      /////////////////////////////////
     //   admin user authentication //
    /////////////////////////////////

    public function admin_auth(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $verfy_email = Admin::where('email', $email)->value('email');
        $verfy_password = Admin::where('password', $password)->value('password');
        
        if($verfy_email && $verfy_password)
        {
        	$result = Admin::where(['email'=>$verfy_email])->get();
        	foreach ($result as $res)
        	{
              session()->put('ADMIN_ID', $res->id);  
        	  session()->put('ADMIN_USERNAME', $res->username);
        	}

        	return redirect('admin/dashboard')->with('msg', 'You have successfully Logged in');
        }
        else
        {
           return redirect()->back()->with('msg', 'Invalid Email or Password');
        }

    }


      /////////////////////////////////
     //   show dashboard            //
    /////////////////////////////////

    public function admin_dashboard()
    {
    	return view('admin/dashboard');
    }

      /////////////////////////////////
     //   admin logout              //
    /////////////////////////////////

    public function admin_logout()
    {
        session()->forget('ADMIN_USERNAME');
        return view('admin/admin_login')->with('msg','Logged Out successfully');
    }
}

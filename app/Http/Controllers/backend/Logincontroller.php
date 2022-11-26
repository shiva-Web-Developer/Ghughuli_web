<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Session;

class Logincontroller extends Controller
{
    public function adminlog()
    {
        return view('backend.login');
    }

    public function logsubmit(Request $request)
    {
        $ff = Admin::where('username',$request->username)->first();
        if(!$ff)
        {
            return redirect()->back()->with('flashmessage','we do not recognise your username !');
        }
        else
        {
            if($request->password == $ff->password)
            {
                $request->session()->put('dataid', $ff->id);
                return redirect('Admin/Dashboard');
            }
            else{
                return redirect()->back()->with('flashmessage','Incorrect Password !');
            }
        }  
    }

    public function admindash()
    {
        return view('backend.dashboard');
    }


    public function logout()
    {
         if(session('dataid')){
             session()->pull('dataid');
         }
         else
         {
             return redirect('Admin/Admin-Login')->with('flashmessage','User Logout Successfully !'); 
         }
          if(!session('dataid'))
          {
    
             return redirect('Admin/Admin-Login')->with('flashmessage','User Logout Successfully !'); 
          }
  
    }
}

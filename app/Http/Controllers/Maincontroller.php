<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Contact;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\Childmenu;
use App\Models\Softwaree;
use App\Models\Photo;
use App\Models\Sitecontent;



class Maincontroller extends Controller
{
   public function aboutme($cat)
   {
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();

      $scnt = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->first();
      $scntp = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->get();
      $pdata = Menu::where('isDeleted','N')->where('id',$cat)->first();
      $ddd = $pdata->menu_name;
      
       return view('frontend.about-aboutme')
       ->with('scnt',$scnt)
       ->with('scntp',$scntp)
       ->with('cat',$cat)
       ->with('ddd',$ddd)
       ->with('sub','')
       ->with('child','')
       ->with('getSoftwaree',$getSoftwaree)
       ->with('getthesubmenu',$getthesubmenu)
       ->with('getchildmenu',$getchildmenu)
       ->with('getmewnudata',$getmewnudata);
   }

   public function aboutme1($cat,$sub)
   {
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();
      $scnt = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->where('sub_cat',$sub)->first();
      $scntp = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->where('sub_cat',$sub)->get();

      $pdata = Menu::where('isDeleted','N')->where('id',$cat)->first();
      $ddd = $pdata->menu_name;
      $pdata = Submenu::where('isDeleted','N')->where('id',$sub)->first();
      $dddd = $pdata->sub_name;

       return view('frontend.about-aboutme')
       ->with('scnt',$scnt)
       ->with('scntp',$scntp)
       ->with('cat',$cat)
       ->with('ddd',$ddd)
       ->with('dddd',$dddd)
       ->with('sub',$sub)
       ->with('child','')
       ->with('getSoftwaree',$getSoftwaree)
       ->with('getthesubmenu',$getthesubmenu)
       ->with('getchildmenu',$getchildmenu)
       ->with('getmewnudata',$getmewnudata);
   }

   public function aboutme2($cat,$sub,$child)
   {
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();

      $scnt = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->where('sub_cat',$sub)->where('child_cat',$child)->first();
      $scntp = Sitecontent::where('isDeleted','N')->where('main_cat',$cat)->where('sub_cat',$sub)->where('child_cat',$child)->get();

      $pdata = Menu::where('isDeleted','N')->where('id',$cat)->first();
      $ddd = $pdata->menu_name;

      $pdata = Submenu::where('isDeleted','N')->where('id',$sub)->first();
      $dddd = $pdata->sub_name;

      $pdata = Childmenu::where('isDeleted','N')->where('id',$child)->first();
      $ddddd = $pdata->child_menu;

       return view('frontend.about-aboutme')
       ->with('scnt',$scnt)
       ->with('scntp',$scntp)
       ->with('cat',$cat)
       ->with('ddd',$ddd)
       ->with('dddd',$dddd)
       ->with('ddddd',$ddddd)
       ->with('sub',$sub)
       ->with('child',$child)
       ->with('getSoftwaree',$getSoftwaree)
       ->with('getthesubmenu',$getthesubmenu)
       ->with('getchildmenu',$getchildmenu)
       ->with('getmewnudata',$getmewnudata);
   }

    public function imagegadsdsllery()
    {
   
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();
      $getphoto = Photo::where('isDeleted','N')->get();



        return view('frontend.imagegallery')
        ->with('getSoftwaree',$getSoftwaree)
        ->with('getthesubmenu',$getthesubmenu)
        ->with('getchildmenu',$getchildmenu)
        ->with('getmewnudata',$getmewnudata)
        ->with('getphoto',$getphoto);
    }

    public function contascvtnagar()
    {
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();
        $getcontact = Contact::get();

        return view('frontend.contact')
        ->with('getSoftwaree',$getSoftwaree)
        ->with('getthesubmenu',$getthesubmenu)
        ->with('getchildmenu',$getchildmenu)
        ->with('getmewnudata',$getmewnudata)
        ->with('getcontact',$getcontact);
    }

    public function manchitrrrra()
    {
      $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
      $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
      $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
      $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();
        $getcontact = Contact::get();

        return view('frontend.manchitra')
        ->with('getSoftwaree',$getSoftwaree)
        ->with('getthesubmenu',$getthesubmenu)
        ->with('getchildmenu',$getchildmenu)
        ->with('getmewnudata',$getmewnudata)
        ->with('getcontact',$getcontact);
    }


    public function consubmit(Request $request)
     {
        $con = Contact::create([
           'name' => $request->name,
           'email'=>$request->email,
           'mobile'=>$request->number,
           'location'=>'ggp',
           'msg'=>$request->message
        ]);
        if($con)
        return redirect('Contact/Contact')->with('successmsg', 'Your Query are Submitted Successfully !');
        else
        return redirect('Contact/Contact')->with('dangermsg', 'Your Query are Not Submitted !');
     }


}

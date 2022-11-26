<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Officer;
use App\Models\Submenu;
use App\Models\Menu;
use App\Models\Childmenu;
use App\Models\Softwaree;
use App\Models\Photo;

class Homecontroller extends Controller
{

    public function lodata()
    {
       $getofficer = Officer::orderBy('id', 'desc')->take(6)->get();
       $getslider = Slider::where('isDeleted','N')->orderBy('id', 'desc')->take(6)->get();
       $getthesubmenu = Submenu::where('isDeleted','N')->orderBy('id')->get();
        $getmewnudata = Menu::where('isDeleted','N')->orderBy('id')->get();
        $getchildmenu = Childmenu::where('isDeleted','N')->orderBy('id')->get();
        $getSoftwaree = Softwaree::where('isDeleted','N')->orderBy('id')->get();
        
        return view('frontend.index')
        ->with('getofficer',$getofficer)
        ->with('getslider',$getslider)
        ->with('getSoftwaree',$getSoftwaree)
        ->with('getthesubmenu',$getthesubmenu)
        ->with('getchildmenu',$getchildmenu)
        ->with('getmewnudata',$getmewnudata);                         
    }




    public function demo()
    {
        $getslider = Slider::where('isDeleted','N')->get();
        return view('backend.demo')->with('getslider',$getslider);
    }



}

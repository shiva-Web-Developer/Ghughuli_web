<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;
use Image;
use Session;
use Redirect;
use Validator;

class Slidercontroller extends Controller
{
    public function uploadslider(Request $request){

        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:8048'

           ]);

           $save = new Slider;
           // image upload 
           $file = $request->image;
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('admin/sliders/', $filename);
           $save->image = $filename;
           $save->heading =$request->heading;
           $save->isDeleted = 'N';
           $save->save();
           return redirect('Admin/Form')->with('flashmessage', 'Image Has been uploaded');
       }

       public function deddlete($id)
       {
           $fetch= Slider::find($id);
           $fetch->delete();
            return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
       }
}

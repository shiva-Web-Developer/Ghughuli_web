<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Officer;


class Officercontroller extends Controller
{
    public function officerphoto()
    {
        $getofficer = Officer::where('isDeleted','N')
        ->orderBy('position', 'ASC')
        ->get();
        return view('backend.officer')->with('getofficer',$getofficer);
    }

    public function uploadofficer(Request $request){

        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:8048'

           ]);

           $save = new Officer;
           // image upload 
           $file = $request->image;
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('admin/officer/', $filename);
           $save->image = $filename;
           $save->name =$request->name;
           $save->deg =$request->deg;
           $save->position =$request->position;
           $save->isDeleted = 'N';
           $save->save();

           return redirect('Admin/Officer-Photo')->with('flashmessage', 'Image Has been uploaded');
       }

       public function delete($id)
       {
           $fetch= Officer::find($id);
           $fetch->delete();
            return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
       }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class Photovideocontroller extends Controller
{


    public function dataphoto()
    {
        $getphoto = Photo::where('isDeleted','N')
        ->get();
        return view('backend.photo')->with('getphoto',$getphoto);
    }

    public function uploadphoto(Request $request){

        $validatedData = $request->validate([

            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:8048'

           ]);

           $save = new Photo;
           // image upload 
           $file = $request->image;
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('admin/photo/', $filename);
           $save->image = $filename;
           $save->title =$request->title;
           $save->isDeleted = 'N';
           $save->save();

           return redirect('Admin/Gallery')->with('flashmessage', 'Image Has been uploaded');
       }

       public function delete($id)
       {
           $fetch= Photo::find($id);
           $fetch->delete();
            return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
       }
}

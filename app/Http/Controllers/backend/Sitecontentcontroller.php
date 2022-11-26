<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitecontent;
use App\Models\Menu;

class Sitecontentcontroller extends Controller
{
    public function sitecontent()
    {
        $getmenu = Menu::where('isDeleted','N')->get();
        $Sitecontent = Sitecontent::where('isDeleted','N')->get();
        return view('backend.sitecontent')
        ->with('Sitecontent',$Sitecontent)
        ->with('getmenu',$getmenu);
    }

    public function uploadsitecontent(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:8048'
           ]);

           $save = new Sitecontent;
           // image upload 
           $file = $request->image;
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('admin/content/', $filename);
           $save->image = $filename;

           $save->con_type =$request->con_type;
           $save->main_cat =$request->main_menu;

           $save->sub_cat =$request->sub_menu;
           $save->child_cat =$request->child_menu;

           $save->heading =$request->heading;
           if($request->textdata==''){$save->content ='';}
           else{$save->content =$request->textdata;}

           $save->isDeleted = 'N';
           $save->save();
           return redirect('Admin/Site-Content')->with('flashmessage', 'Image Has been uploaded');
       }

       public function editdata($id)
       {
       
        $save =  Sitecontent::find($id);
        return view('backend.sitecontent-edit');
   }


       public function contentupdatedtata(Request $request){

            $id  = $request->user_id;
            $save =  Sitecontent::find($id);

           $save->con_type =$request->con_type;

           if($request->newimg==null)
           {
           $save->image = $request->oldimg;
           }
           else
           {
               $image_path = public_path("admin/content/{$request->oldimg}");
               if ($image_path) {
              
                   unlink($image_path);
               }
               $file = $request->newimg;
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('admin/content/', $filename);
               $save->image = $filename;
           }

           $save->heading =$request->heading;
           $save->content =$request->textdata;
           $save->save();

           return redirect('Admin/Site-Content')->with('flashmessage', 'Image Has been Updated !');
       }


       public function dddcelete($id)
       {
           $fetch= Sitecontent::find($id);
           $fetch->delete();
            return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
       }
}

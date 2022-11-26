<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Softwaree;

class Softwarecontroller extends Controller
{
    public function managesoftware()
    {
        $getsoftware = Softwaree::where('isDeleted','N')
        ->get();
        return view('backend.software')
        ->with('getsoftware',$getsoftware);
    }

    public function uploadsoftware(Request $request){

           $save = new Softwaree;
           $save->name =$request->software_name;
           $save->subject =$request->software_link;
           $save->isDeleted = 'N';
           $save->save();

           return redirect('Admin/Manage-Software')->with('flashmessage', 'Data Has been uploaded');
       }

       public function delete($id)
       {
           $fetch= Softwaree::find($id);
           $fetch->delete();
            return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
       }
}

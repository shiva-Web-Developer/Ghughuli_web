<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Childmenu;


class Menucontroller extends Controller
{
    public function submenudata(Request $request)
    {
        $data['submenu'] = Submenu::
                        where('cat_name',$request->main_menu)
                        ->get();
            return response()->json($data);
    }

    public function childmenudata(Request $request)
    {
        $data['childmenu'] = Childmenu::
                        where('mainmenu',$request->main_menu)
                        ->where('submenu',$request->sub_menu)
                        ->get();
            return response()->json($data);
    }


    public function addmenu()
    {
        $getmenu = Menu::where('isDeleted','N')
        ->get();
        return view('backend.menu')
        ->with('getmenu',$getmenu);
    }
    

    public function uploadmenu(Request $request){

        $save = new Menu;
        $save->menu_name =$request->menu_name;
        $save->isDeleted = 'N';
        $save->save();
        return redirect('Admin/Add-Menu')->with('flashmessage', 'Data Has been uploaded');
    }

    public function dadelete($id)
    {
        $fetch= Menu::find($id);
        $fetch->delete();
         return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
    }


    public function addsubmenu()
    {
        $getmenu = Menu::where('isDeleted','N')->get();
        $getsubmenu = Submenu::where('isDeleted','N')
        ->get();
        return view('backend.submenu')
        ->with('getsubmenu',$getsubmenu)
        ->with('getmenu',$getmenu);
    }

    public function uploadsubmenu(Request $request){

        $save = new Submenu;
        $save->cat_name =$request->main_menu;
        $save->sub_name =$request->sub_menu;
        $save->isDeleted = 'N';
        $save->save();
        return redirect('Admin/Add-Sub-Menu')->with('flashmessage', 'Data Has been uploaded');
    }

    public function dadsdfelete($id)
    {
        $fetch= Submenu::find($id);
        $fetch->delete();
         return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
    }


    public function addchildmenu()
    {
        $getmenu = Menu::where('isDeleted','N')->get();
        $getsubmenu = Submenu::where('isDeleted','N')->get();
        $getchildmenu = Childmenu::where('isDeleted','N')->get();
        return view('backend.childmenu')
        ->with('getsubmenu',$getsubmenu)
        ->with('getchildmenu',$getchildmenu)
        ->with('getmenu',$getmenu);
    }

    public function uploadchildmenu(Request $request){

        $save = new Childmenu;
        $save->child_menu =$request->child_menu;
        $save->mainmenu =$request->main_menu;
        $save->submenu =$request->sub_menu;
        $save->isDeleted = 'N';
        $save->save();
        return redirect('Admin/Add-Child-Menu')->with('flashmessage', 'Data Has been uploaded');
    }

    public function dadhgjngmnsdfelete($id)
    {
        $fetch= Childmenu::find($id);
        $fetch->delete();
         return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
    }

}

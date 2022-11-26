<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class Contactcontroller extends Controller
{


    public function contactsdata()
    {
        $getcontact = Contact::get();
        return view('backend.contact')
        ->with('getcontact',$getcontact);
    }

    public function dadhgjngmnXsdfelete($id)
    {
        $fetch= Contact::find($id);
        $fetch->delete();
         return redirect()->back()->with('flashmessage','Item Deleted Successfully !');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function contact(Request $request){
        $data=new contact;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->message=$request->message;
        $result=$data->save();
        if($result){
            return back()->with('message','We will Contact you shortly !');
        }
        else{
            return "not work";
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class getapidata extends Controller
{
   function index(Request $request){
        $device= new Device();
        $device->name=$request->name;
        $device->member_id=$request->member_id;
      
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been save"];
        }else{
            return ["result"=>"Data hasnot been save"];
        }
    
   }
   function update(Request $req){
       $device= Device::find($req->id);
       $device->name=$req->name;
       $device->member_id=$req->member_id;
       $device->id=$req->id;
       $result=$device->save();
       if ($result){
           return ["result"=>"id updated"];
       }else{
        return ["result"=>"id not updated"];
       }
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Validator;
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
   function delete($id){
       $device=Device::find($id);
      $result= $device->delete();
        if($result){
            return ["Result"=>"data has been deleted"];
        }else{
            return ["Result"=>"data has not been deleted"];
        }

      
   }
   function search($name){
       return Device::where("name","like","%".$name."%")->get();
   }

   function testdata(Request $req)
   {
       $rules=array(
           "member_id"=>"required|min:2|max:4"
       );
       $validator=Validator::make($req->all(),$rules);
       if($validator->fails())
       {
           return $validator->errors();
       }else{

        $device=new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){

            return "data has been store to database";
        }else{
            return "operation faild";
        }
       }
      
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class getapidata extends Controller
{
   function index(){
//or return DB::select(select * from tablename);
    return member::all();
   }
}

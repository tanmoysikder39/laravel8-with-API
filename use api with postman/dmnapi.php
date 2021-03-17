<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dmnapi extends Controller
{
    function index() {

        return ["name"=>"tanmoy",           //post maner collection a new te localhost open kore route er address diye connect korte hobe.
                "email"=>"tanmoy@gmail.com",
                "address"=>"Barisal"

    
    ];
    }
}

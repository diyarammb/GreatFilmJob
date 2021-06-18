<?php

namespace App\Http\Controllers;
use validator;
use auth;
use DB;
use Illuminate\Http\Request;

class administration_login extends Controller
{
 
public function index(){
    return view("administration_login");
}

function checklogin(Request $request){
    
    $this->validate ( $request,[
        "username" => "required|username",
        "password" => "required|password",

    ]);

}
 

}

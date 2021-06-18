<?php

use Illuminate\Support\Facades\Route;
 use App\Http\controllers\administration_login;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/administration_login', function () {
    return view('admin_login');
});
// route::get("admins",[administration_login::class,"admin_login"]);
route::view("/administrator","admins/index");
route::view("/general_setting","admins/general_setting");
route::view("/Payment_setting","admins/Payment_settings");
route::view("/meta_setting","admins/meta_setting");
route::view("/job_level_setting","admins/job_level_setting"); 
route::view("/Payapl_setting","admins/Paypal_setting"); 
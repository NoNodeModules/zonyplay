<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/register',function(Request $request){
    // $user = User::where([['username'=> $request->username],['psd'=> $request->psd]])->get();
    // return $user;
    return "select * from user where username=dgcyhscuj and psd=gcvdayhcuj64489938736";
    return [
        "data" => [
            "username" => "cvgdahcvsdujvsujv",
            "password" => "adfcgsadcv4263264"
        ],
        "header" => 200
    ];
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/read',function(){
    return response()->json(["message"=>"GET Response"]);
});

Route::post('/create',function(Request $req){
    return response()->json(["message"=>"POST Response"]);
});

Route::put('/replace',function(){
    return response()->json(["message"=>"PUT Response"]);
});

Route::patch('/update',function(){
    return response()->json(["message"=>"PATCH Response"]);
});

Route::delete('/delete',function(){
    return response()->json(["message"=>"DELETE Response"]);
});
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Example API route
Route::get('/',function (Request $request) {
    return response()->json(['msg'=>'Hello World!']);
});

<?php

use Illuminate\Http\Request;

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

Route::get('product',function(){
    $products = [
        [
            'name'=>'iPhone 11',
            'price'=>1200
        ],
        [
            'name'=>'Galaxy 20A',
            'price'=>200
        ],
        [
            'name'=>'Mac book pro',
            'price'=>2500
        ],
    ];
    return json_encode($products);
});
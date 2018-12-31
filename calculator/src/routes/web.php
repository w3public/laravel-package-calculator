<?php
/**
 * Created by PhpStorm.
 * User: Bablu
 * Date: 12/31/2018
 * Time: 2:27 PM
 */

Route::get("calculator", function(){
    echo "Hello from the calculator package!";
});


Route::group(['namespace'=>'W3public\Calculator\Http\Controllers'],function(){
    Route::get('add/{a}/{b}','CalculatorController@add');
    Route::get('sub/{a}/{b}','CalculatorController@subtract');
});

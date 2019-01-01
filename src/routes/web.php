<?php
/**
 * Created by PhpStorm.
 * User: Bablu
 * Date: 12/31/2018
 * Time: 2:27 PM
 */

Route::group(['namespace'=>'W3public\Calculator\Http\Controllers'],function(){
    Route::get('calculator','CalculatorController@index');
    Route::get('add/{a}/{b}','CalculatorController@add');
    Route::get('sub/{a}/{b}','CalculatorController@subtract');
});

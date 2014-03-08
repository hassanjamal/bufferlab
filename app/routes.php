<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

/**
 *  
 */
Route::group(array('prefix'=>'services'), function(){
    Route::controller('/', 'ServicesController');
});

/**
 *  
 */
Route::group(array('prefix'=>'works'), function(){
    Route::controller('/', 'WorksController');
});
/**
 *  
 */
Route::group(array('prefix'=>'blogs'), function(){
    Route::controller('/', 'BlogsController');
});
/**
 *  
 */
Route::controller('/', 'HomeController');

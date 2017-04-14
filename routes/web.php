<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware' => ['web']],function (){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::post('signup',[
       'uses' => 'UserController@postSignUp',
        'as' => 'signUp'
    ]);

    Route::get('/login', function () {
        return view('welcome');
    });

    Route::post('signin',[
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('initial',[
        'uses' => 'UserController@initialize',
        'as' => 'initial',
        'middleware' => 'auth'
    ]);

    Route::get('dashboard',[
        'uses' => 'DashboardController@dashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);

    Route::post('createPost',[
        'uses' => 'DashboardController@createPost',
        'as' => 'createPost',
        'middleware' => 'auth'
    ]);

    Route::post('saveInitial',[
        'uses' => 'InitialController@initialize',
        'as' => 'saveInitial',
        'middleware' => 'auth'
    ]);
    
    
});

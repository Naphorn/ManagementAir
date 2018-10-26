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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/hmoe', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('layouts.master');
});

Route::get('/level1', function () {
    return view('layouts.level1');
});

Route::get('/level2', function () {
    return view('layouts.level2');
});

Route::get('/level3', function () {
    return view('layouts.level3');
});

Route::get('/level4', function () {
    return view('layouts.level4');
});

Route::get('/level5', function () {
    return view('layouts.level5');
});

// Route::get('/contact', function () {
//     return view('layouts.contact');
// });

// Route::get('/user/id/{id}/{name?}', function ($id, $name='default name') {
//     echo 'รหัสผู้ใช้'.$id.'<br>';
//     echo 'ชื่อผู้ใช้'.$name.'<br>';
// })->name('user');
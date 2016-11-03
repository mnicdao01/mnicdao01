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
    $profile['fullname'] = 'MARK NICDAO';
    $profile['image'] = 'img/profile.jpg';
    return view('pages.index')->withProfile($profile);
});

Route::resource('contacts', 'ContactsController', ['only' => ['store']]);

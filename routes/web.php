<?php

use Illuminate\Support\Facades\Route;

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
    $content_var = '
        Define the variable moustache from the .mjml file. Pass the variable content to the generate blade file
        from either the route, controller or any other means to display.
    ';
    $button_url = "https://google.com";

    return view('mail.index', compact('content_var', 'button_url'));
});

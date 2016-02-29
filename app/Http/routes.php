<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  $items = file_get_contents(base_path() . '/resources/items.json');
  $colors = file_get_contents(base_path() . '/resources/colors.json');
  $brands = file_get_contents(base_path() . '/resources/brands.json');
  $categories = file_get_contents(base_path() . '/resources/categories.json');
  $sizes = file_get_contents(base_path() . '/resources/sizes.json');
  return view('home', compact('items', 'colors', 'brands', 'categories', 'sizes'));
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

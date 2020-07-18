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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/about", function () {
//     return view("pages.about");
// });

// Route::get("/about/{id}", function ($id) {
//     return view("pages.about")->with("id", $id);
// });

Route::get('/', 'PagesController@index');
Route::get("/about", 'PagesController@about');
Route::get("/services", 'PagesController@services');

Route::get("products/{id}/{name}", function ($id, $name) {
    return view("pages.products", compact("id", "name"));
});

Route::resource('posts', 'PostsController');

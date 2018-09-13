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

// Visitor routes

Route::get('/', function () {
    return view('accueil');
});


Route::get('formation/{specification}','GlobalController@get_formation');
Route::get('section/{view}','GlobalController@get_view');

Route::post('create_candidature','CandidaturesController@create_candidature');

// Admin routes

Route::get('admin','globalController@admin');
Route::get('admin/inscriptions','globalController@inscriptions_liste');
Route::get('admin/inscriptions/candidature/{id}','globalController@display_one');
Route::get('admin/gestionnaire','globalController@pages_list');
Route::get('disconnect','GlobalController@disconnect');
Route::get('admin/gestionnaire/{page}','GlobalController@modify_page');
Route::post('save/page','GlobalController@save_page');

Route::post('login','globalController@login');

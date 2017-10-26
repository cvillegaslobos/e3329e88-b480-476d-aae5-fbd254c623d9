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
    return view('welcome');
});


Route::get('/repo/overview', 'RepoController@overview');
Route::get('/repo/{repo_slug}/summary', 'RepoController@summary');
Route::get('/repo/{repo_slug}/branches', 'RepoController@branches');
Route::get('/repo/{repo_slug}/tags', 'RepoController@tags');

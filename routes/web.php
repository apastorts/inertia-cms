<?php

use App\Page;
use Inertia\Inertia;

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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'HomeController@home')->middleware('auth');
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@authenticate');

foreach(Pages::published() as $page){
	Route::get($page->link, function() use ($page) {
		return Inertia::render('Base', compact('page'));
	});
}
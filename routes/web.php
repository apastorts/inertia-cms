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

Route::get('/dashboard', 'HomeController@home')->middleware('auth');
Route::get('/login', 'HomeController@login')->name('login');
Route::post('/login', 'HomeController@authenticate');

foreach(Page::live()->get() as $page){
	Route::get($page->link, function() use ($page) {
		return Inertia::render(($page->id == 1 ? 'Home' : 'Base'), compact('page'));
	});
}
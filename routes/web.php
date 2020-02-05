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
    return view('index');
});

Route::get('/name', 'Name@name')->name('name');

Route::Group( ['prefix' => 'admin'], function ()
{
    Route::get('/created', 'Name@created')->name('created');
    Route::get('/listed', 'Name@listed')->name('listed');
});
Route::prefix('admin2')->group(function () {
    Route::get('/created2', 'Name@created')->name('created');
    Route::get('/listed2', 'Name@listed')->name('listed');
    
    Route::get('/listed2/{id}', 'Name@user')->name('listed.link');
});
/* Route::namespace('Backend')->group(function () {
    Route::get('/namespace1', 'Namespace1@namespace1')->name('namespace1');
});  */
Route::name('Backend.')->prefix('a')->namespace('Backend')->group(function () {
    Route::get('/namespace1', 'Namespace1@namespace1')->name('namespace1');
    Route::get('/namespace1', 'Namespace1@namespace1')->name('namespace1');
    Route::get('/namespace1/{id}/{name}', 'Namespace1@ok')->name('namespace1.show');
}); 

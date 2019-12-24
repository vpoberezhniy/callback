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

//    App\Jobs\SendReminderEmail::dispatch('TEST MESSAGE')->delay(now()->addMinutes(1));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('role');
Route::resource('/ticket', 'TicketController');

//Route::get('/ticket', 'TicketController@index');
//Route::get('/ticket/{id}', 'TicketController@create');
//Route::get('/ticket/{id}', 'TicketController@show');
//Route::delete('/ticket/{id}', 'TicketController@destroy');


Route::get('/send', 'MailController@send');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function(){
    Route::get('/', 'AdminController@dashboard');
    Route::resource('/role', 'RoleController');
    Route::resource('/user', 'UserController');

});



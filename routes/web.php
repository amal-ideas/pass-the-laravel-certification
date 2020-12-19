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
    return view('welcome');
});

Route::get('/hello',function (){
    return Response()->caps('hello world');
});

Route::match(['get','post'],'/testing',function (){
   return 'Both get and post requested!';
})->name('get');

Route::get('/user/{id?}',function ($id = null){
    if(!is_null($id)) {
        return 'User:' . $id;
    }
    return 'No users found';
});

Route::get('/test/middleware', function (){
    return 'this should call the LogMyRoute middleware!';
})->middleware('logmyroute');

Route::get('ticket','TicketsController@index')->name('tickets.show');
Route::post('ticket','TicketsController@store')->name('tickets.create');

//Route::get('/tickets/name/{name}', 'TicketsController$name');

Route::get('/test-json', function () {
    return ['numbers' => [1, 2, 3, 4, 5]];
});

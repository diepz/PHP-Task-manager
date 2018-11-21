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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::prefix('customer')->group(function () {
//    Route::get('index', function () {
//        return view('modules.customer.index');
//    });
//
//    Route::get('create', function () {
//        return view('modules.customer.create');
//    });
//
//    Route::get('store', function () {
//        return view('modules.customer.store');
//    });
//
//    Route::get('store1', function () {
//        return view('modules.customer.store1');
//    })->name('store1');
//
//    Route::get('store2', function () {
//        return view('modules.customer.store2');
//    })->name('store2');
//
//    Route::get('store3', function () {
//        return view('modules.customer.store3');
//    })->name('store3');
//
//    Route::get('store4', function () {
//        return view('modules.customer.store4');
//    })->name('store4');
//
//    Route::get('delete', function () {
//        return view('modules.customer.delete');
//    })->name('delete');
//
//    Route::get('repair', function () {
//        return view('modules.customer.repair');
//    })->name('repair');
//
//    Route::get('{id}/show', 'CustomerController@show');
//    Route::get('{id}/edit', 'CustomerController@edit');
//    Route::patch('{id}/update', 'CustomerController@update');
//    Route::delete('{id}/delete', 'CustomerController@destroy');
//
//    Route::get('/tasks', 'TaskController@index')->name('tasks.index');
//
//});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');

Route::group(['prefix' => 'tasks'], function () {
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/create','TaskController@create')->name('tasks.create');
    Route::post('/create','TaskController@store')->name('tasks.store');
    Route::get('/{id}/edit','TaskController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','TaskController@update')->name('tasks.update');
    Route::get('/{id}/destroy','TaskController@destroy')->name('tasks.destroy');
});
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

Route::get('/', 'Pages\Main')->name('main');
Route::get('/repairs', 'Pages\Repairs')->name('repairs');
Route::get('/sendings', 'Pages\Sending')->name('sending');
Route::get('/partners', 'Pages\Partners')->name('partners');

Route::match(['get', 'post'], '/repair_form', 'Forms\RepairForm')->name('repair_form');

Auth::routes();

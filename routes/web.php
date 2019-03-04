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

Route::get('/', 'Pages\Root')->name('root');

Route::middleware(['auth'])->group(function(){
    Route::get('/main', 'Pages\Main')->name('main');
    Route::match(['get', 'post'], '/repairs', 'Pages\Repairs')->name('repairs');
    // Route::get('/sendings', 'Pages\Sending')->name('sending');
    // Route::get('/partners', 'Pages\Partners')->name('partners');

    Route::match(['get', 'post'], '/new_repair', 'Forms\RepairForm@index')->name('new_repair');
    Route::match(['get', 'post'], '/repair/{id}', 'Forms\RepairForm@edit')->name('edit_repair_form');
    Route::match(['get', 'post'], '/partner_form', 'Forms\PartnerForm')->name('partner_form');
});

Auth::routes();

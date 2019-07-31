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

// Root page view all
Route::get('/', 'Pages\Root')->name('root');
Auth::routes();

Route::get('/feedback', 'Forms\Feedback@index')->name('feedback');
Route::post('/send_feedback', 'Forms\Feedback@send')->name('send_feedback');

Route::middleware(['auth'])->group(function(){
    
    // Pages
    Route::get('/repairs', 'Pages\Repairs@index')->name('repairs');
    Route::post('/repairs', 'Pages\Repairs@filter')->name('repairs_filter');
    Route::post('/repairs_search', 'Pages\Repairs@search')->name('repairs_search');
    
    // Forms
    Route::match(['get', 'post'], '/profile', 'Forms\ProfileForm')->name('profile');
    Route::match(['get', 'post'], '/new_repair', 'Forms\RepairForm@index')->name('new_repair');
    Route::match(['get', 'post'], '/repair/{id}', 'Forms\RepairForm@edit')->name('edit_repair_form');

    // PrintForm
    Route::get('/act_of_repair/{id}', 'PrintForms\ActOfRepair')->name('act_of_repair');
   
});
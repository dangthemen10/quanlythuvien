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
Route::get('/tempblate', function () {
    return view('backend/layouts/master');
});

//Route of thể loại sách
Route::get('/admin/theloaisach', 'Backend\TheloaiController@index')->name('backend.theloai.index');
Route::get('/admin/theloai/create', 'Backend\TheloaiController@create')->name('backend.theloai.create'); 
Route::post('/admin/theloai/store', 'Backend\TheloaiController@store')->name('backend.theloai.store'); 
Route::get('/admin/theloai/{id}/edit', 'Backend\TheloaiController@edit')->name('backend.theloai.edit');
Route::post('/admin/theloai/{id}/update', 'Backend\TheloaiController@update')->name('backend.theloai.update');
Route::delete('/admin/theloai/{id}', 'Backend\TheloaiController@destroy')->name('backend.theloai.destroy');
Route::get('/admin/theloai/print', 'Backend\TheloaiController@print')->name('backend.theloai.print');
//Route of nhà xuất bản
Route::get('/admin/nhaxuatban', 'Backend\NxbController@index')->name('backend.nxb.index');
Route::get('/admin/nxb/create', 'Backend\NxbController@create')->name('backend.nxb.create'); 
Route::post('/admin/nxb/store', 'Backend\NxbController@store')->name('backend.nxb.store'); 
Route::get('/admin/nxb/{id}/edit', 'Backend\NxbController@edit')->name('backend.nxb.edit');
Route::post('/admin/nxb/{id}/update', 'Backend\NxbController@update')->name('backend.nxb.update');
Route::delete('/admin/nxb/{id}', 'Backend\NxbController@destroy')->name('backend.nxb.destroy');
Route::get('/admin/nxb/print', 'Backend\NxbController@print')->name('backend.nxb.print');

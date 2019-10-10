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
//Route of khoa
Route::get('/admin/khoa', 'Backend\KhoaController@index')->name('backend.khoa.index');
Route::get('/admin/khoa/create', 'Backend\KhoaController@create')->name('backend.khoa.create'); 
Route::post('/admin/khoa/store', 'Backend\KhoaController@store')->name('backend.khoa.store'); 
Route::get('/admin/khoa/{id}/edit', 'Backend\KhoaController@edit')->name('backend.khoa.edit');
Route::post('/admin/khoa/{id}/update', 'Backend\KhoaController@update')->name('backend.khoa.update');
Route::delete('/admin/khoa/{id}', 'Backend\KhoaController@destroy')->name('backend.khoa.destroy');
Route::get('/admin/khoa/print', 'Backend\KhoaController@print')->name('backend.khoa.print');
//Route of nganh
Route::get('/admin/nganh', 'Backend\NganhController@index')->name('backend.nganh.index');
Route::get('/admin/nganh/create', 'Backend\NganhController@create')->name('backend.nganh.create'); 
Route::post('/admin/nganh/store', 'Backend\NganhController@store')->name('backend.nganh.store'); 
Route::get('/admin/nganh/{id}/edit', 'Backend\NganhController@edit')->name('backend.nganh.edit');
Route::post('/admin/nganh/{id}/update', 'Backend\NganhController@update')->name('backend.nganh.update');
Route::delete('/admin/nganh/{id}', 'Backend\NganhController@destroy')->name('backend.nganh.destroy');
Route::get('/admin/nganh/print', 'Backend\NganhController@print')->name('backend.nganh.print');
//Route of sách
Route::get('/admin/sach', 'Backend\SachController@index')->name('backend.sach.index');
Route::get('/admin/sach/create', 'Backend\SachController@create')->name('backend.sach.create'); 
Route::post('/admin/sach/store', 'Backend\SachController@store')->name('backend.sach.store'); 
Route::get('/admin/sach/{id}/edit', 'Backend\SachController@edit')->name('backend.sach.edit');
Route::post('/admin/sach/{id}/update', 'Backend\SachController@update')->name('backend.sach.update');
Route::delete('/admin/sach/{id}', 'Backend\SachController@destroy')->name('backend.sach.destroy');
Route::get('/admin/sach/print', 'Backend\SachController@print')->name('backend.sach.print');
//Route of Đọc giả
Route::get('/admin/docgia', 'Backend\DocgiaController@index')->name('backend.docgia.index');
Route::get('/admin/docgia/create', 'Backend\DocgiaController@create')->name('backend.docgia.create'); 
Route::post('/admin/docgia/store', 'Backend\DocgiaController@store')->name('backend.docgia.store'); 
Route::get('/admin/docgia/{id}/edit', 'Backend\DocgiaController@edit')->name('backend.docgia.edit');
Route::post('/admin/docgia/{id}/update', 'Backend\DocgiaController@update')->name('backend.docgia.update');
Route::delete('/admin/docgia/{id}', 'Backend\DocgiaController@destroy')->name('backend.docgia.destroy');
Route::get('/admin/docgia/print', 'Backend\DocgiaController@print')->name('backend.docgia.print');
//Route of Thủ thư
Route::get('/admin/thuthu', 'Backend\ThuthuController@index')->name('backend.thuthu.index');
Route::get('/admin/thuthu/create', 'Backend\ThuthuController@create')->name('backend.thuthu.create'); 
Route::post('/admin/thuthu/store', 'Backend\ThuthuController@store')->name('backend.thuthu.store'); 
Route::get('/admin/thuthu/{id}/edit', 'Backend\ThuthuController@edit')->name('backend.thuthu.edit');
Route::post('/admin/thuthu/{id}/update', 'Backend\ThuthuController@update')->name('backend.thuthu.update');
Route::delete('/admin/thuthu/{id}', 'Backend\ThuthuController@destroy')->name('backend.thuthu.destroy');
Route::get('/admin/thuthu/print', 'Backend\ThuthuController@print')->name('backend.thuthu.print');

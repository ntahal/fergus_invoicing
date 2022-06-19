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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/invoice/{invoice_id}', 'InvoiceController@index')->name('invoice');
Route::get('/invoice/updatestatus/{invoice_id}', 'UpdateStatusController@index')->name('updatestatus');
Route::post('/invoice/updatestatus/{invoice_id}', 'UpdateStatusController@update')->name('updatestatusPost');
Route::get('/invoice/{invoice_id}/updatenote/{note_id}', 'UpdateNoteController@index')->name('updatenote');
Route::post('/invoice/{invoice_id}/updatenote/{note_id}', 'UpdateNoteController@update')->name('updatenotePost');
Route::get('/invoice/{invoice_id}/addnote', 'AddNoteController@index')->name('addnote');
Route::post('/invoice/{invoice_id}/addnote', 'AddNoteController@add')->name('addnote');
//Route::get('/invoice/{invoice_id}/deletenote/{note_id}', 'InvoiceController@deleteNote')->name('invoice');

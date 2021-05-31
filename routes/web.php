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

//  Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('/about');
// });
// Route::get('/tes', function () {
//     return view('/tes');
// });

// Route::get('/pembayaran', function () {
//     return view('/pembayaran.index');
// });

// home about
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

//services
Route::get('pelayanan','PelayananController@index');

//Basket
// Route::get('/baskets','BasketsController@index');
// Route::get('/baskets/create','BasketsController@create');
// Route::get('/baskets/{basket}','BasketsController@show');
// Route::post('/baskets','BasketsController@store');
// Route::delete('/baskets/{basket}','BasketsController@destroy');
// Route::get('/baskets/{basket}/edit','BasketsController@edit');
// Route::patch('/baskets/{basket}','BasketsController@update');
Route::resource('baskets','BasketsController')->middleware('auth');
// Route::get('/trash','BasketsController@trash');
// // Route::get('/baskets/{basket}','BasketsController@truncate');
// Route::get('/baskets/hapus/{user_id}','BasketsController@hapus');
// Route::get('/baskets/delete/{id}','BasketsController@delete');
// Route::get('/baskets/cari','BasketsController@cari');
// Route::get('awal','BasketsController@awal');
Route::get('admin','BasketsController@admin');


// barang
Route::get('/barangs','BarangsController@index')->middleware('auth');
Route::get('/barangs/create','BarangsController@create')->middleware('auth');
Route::post('/barangs','BarangsController@store');
Route::get('/barangs/{barang}/edit','BarangsController@edit');
Route::put('/barangs/{barang}','BarangsController@update');
Route::delete('/barangs/{basket}','BarangsController@destroy');
Route::get('/barangs/hapus/{id}','BarangsController@hapus');
// Route::get('checkout','BarangsController@checkout');
Route::get('/trash','BarangsController@trash')->middleware('auth');

//pembayaran
// Route::get('/pembayaran', function () {
//          return view('/pembayaran.index');
//      });

Route::get('pembayaran','PembayaranController@index')->middleware('auth');
Route::get('pembayaran/create','PembayaranController@create')->middleware('auth');
Route::post('pembayaran','PembayaranController@store')->middleware('auth');

/*transaksi online*/
// Route::get('/transaksionline', function () {
// return view('/transaksionline.index');
// });

Route::get('transaksionline','TransaksionlinesController@index');
Route::get('transaksionline/create','TransaksionlinesController@create');
Route::post('transaksionline','TransaksionlinesController@store');
Route::get('datato','TransaksionlinesController@datato');

//cod
// Route::get('/cod', function () {
// return view('/cod.index');
// });
Route::get('cod','CodController@index');
Route::get('cod/create','CodController@create');
Route::post('cod','CodController@store');
Route::get('datacod','CodController@datacod');


// konfirmasi
Route::get('/konfirmasi','KonfirmasiController@index');
Route::get('/konfirmasi/create','KonfirmasiController@create')->middleware('auth');
Route::post('/konfirmasi','KonfirmasiController@store');

// template admin
Route::get('/tableadmin', function () {
return view('tableadmin.tableadmin');
});

Route::get('/data-table', function(){
    return view('tableadmin.data-table');
});

Route::get('/loginadmin', function () {
    return view('/loginadmin.loginadmin');
});

// cek siapa pembeli(khusus admin)
Route::get('/khususadmins','KhususadminsController@index')->middleware('auth');

//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

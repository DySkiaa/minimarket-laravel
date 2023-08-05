<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Livewire\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('user.landingpage');
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/produkuser', 'HomeController@tampilproduk')->name('home');
Route::get('/kategoriuser', 'HomeController@tampilkategori')->name('home');
Route::get('/detailprodukuser/{id}', 'HomeController@detailproduk')->name('home');
Route::get('/sesuaikategori/{id}', 'HomeController@carisesuaikategori')->name('home');


Route::get('/home', 'KategoriController@homeadmin')->name('home');

Route::get('/kategori', 'KategoriController@kategori')->name('home');
Route::get('/editkategori/{id}', 'KategoriController@editkategori')->name('home');
Route::post('/simpanupdatekategori', 'KategoriController@simpanupdatekategori')->name('home');
Route::post('/simpankategori', 'KategoriController@simpankategori')->name('home');
Route::get('/tambahkategori', 'KategoriController@tambahkategori')->name('home');

Route::get('/produk', 'ProdukController@produk')->name('home');
Route::get('/tambahproduk', 'ProdukController@tambahproduk')->name('home');
Route::post('/simpanproduk', 'ProdukController@simpanproduk')->name('home');
Route::post('/simpanupdateproduk', 'ProdukController@simpanupdateproduk')->name('home');
Route::get('/detailproduk/{id}', 'ProdukController@detailproduk')->name('home');
Route::get('/editproduk/{id}', 'ProdukController@editproduk')->name('home');
Route::get('/hapusproduk/{id}', 'ProdukController@hapusproduk')->name('home');

Route::get('/pesanan', 'PesananController@pesanan')->name('home');
Route::get('/detailpesanan/{id}', 'PesananController@detailpesanan')->name('home');
Route::get('/tambahpesanan', 'PesananController@tambahpesanan')->name('home');
Route::get('/cart/tambah/{id}', 'PesananController@tambahcart')->where("id", "[0-9]+");
Route::get('/cart', 'PesananController@cart')->name('home');
Route::get('/cart/hapus/{id}', 'PesananController@hapuscart')->where("id", "[0-9]+");
Route::post('/transaksi/tambah', 'PesananController@tambahtransaksi')->name('home');
Route::get('/editjumlah/{id}', 'PesananController@editjumlah')->name('home');
Route::post('/savejumlah', 'PesananController@savejumlah')->name('home');
Route::get('/cetak/{id}', 'PesananController@cetakpesanan')->name('home');

Route::get('/cart/hapus/produk_id', 'PesananController@unsetcart')->name('home');

// Route::get('/', [Home::class, 'render'])->name('home');

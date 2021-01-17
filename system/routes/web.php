 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClientArtikelController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/contact', function() {
	return view("contact");
});

Route::get('/register', function() {
	return view("register");
});

Route::get('/about', function() {
	return view("About");
});

Route::get('/home', [ClientController::class, 'index']);
Route::get('produk/filter', [ClientController::class, 'filter']);
// Route::get('/home', function() {
// 	return view("home");
// });

Route::get('/detail', function() {
	return view("detail");
});


Route::get('/beranda',[HomeController::class, 'showBeranda']);
Route::get('/beranda/{status}',[HomeController::class, 'showBeranda']);
Route::get('/barang',[HomeController::class, 'showBarang']);
Route::get('/komentar',[HomeController::class, 'showKomentar']);
Route::get('/ganti-bahasa',[HomeController::class, 'gantiBahasa']);

Route::get('/setting',[SettingController::class, 'index']);
Route::post('/setting',[SettingController::class, 'store']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);


Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::resource('/produk', ProdukController::class);
	Route::resource('/product', ProductController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::post('artikel/filter', [ArtikelController::class, 'filter']);
    Route::resource('artikel', ArtikelController::class);
});
  
Route::get('/', [ClientArtikelController::class, 'index']);
Route::post('/filter', [ClientArtikelController::class, 'filter']);
Route::get('baca/{artikel}', [ClientArtikelController::class, 'create']);
Route::post('baca/{artikel}', [ClientArtikelController::class, 'store']);
Route::get('detail/{artikel}', [ClientArtikelController::class, 'show']);
Route::get('komentar/{artikel}/edit', [ClientArtikelController::class, 'edit']);
Route::put('komentar/{artikel}', [ClientArtikelController::class, 'update']);
Route::delete('komentar/{artikel}', [ClientArtikelController::class, 'destroy']);

Route::get('/login',[AuthController:: class, 'showLogin'])->name('login');
Route::post('/login',[AuthController:: class, 'loginProcess']);
Route::get('/logout',[AuthController:: class, 'logout']);
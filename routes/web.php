<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\FirebaseAuthController;
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
//     return view('index');
// });
Route::get('/', [FirebaseController::class, 'index'])->name('index');
Route::get('login', [FirebaseController::class, 'login'])->name('login');
Route::get('register', [FirebaseController::class, 'register'])->name('register');
//products
Route::get('foodstuff', [FirebaseController::class, 'foodstuff']);
Route::get('grocery', [FirebaseController::class, 'grocery']);
Route::get('electronics', [FirebaseController::class, 'electronics']);
Route::get('home_appliances', [FirebaseController::class, 'homeAppliances']);
Route::get('phones_accessories', [FirebaseController::class, 'phoneAccesories']);
Route::get('cereal', [FirebaseController::class, 'cereal']);
Route::get('gas_fuels', [FirebaseController::class, 'gas_fuels']);
Route::get('bags', [FirebaseController::class, 'bags']);
Route::get('cosmetics', [FirebaseController::class, 'cosmetics']);
Route::get('hair_beauty', [FirebaseController::class, 'hairBeauty']);
Route::get('clothes', [FirebaseController::class, 'clothes']);
Route::get('shoes', [FirebaseController::class, 'shoes']);
Route::get('milling_products', [FirebaseController::class, 'millingProducts']);
Route::get('other_items', [FirebaseController::class, 'otherItems']);
Route::get('single_product/{key}', [FirebaseController::class, 'singleProduct'])->name('single_product');
//services
Route::get('services', [FirebaseController::class, 'services']);
Route::get('transport', [FirebaseController::class, 'transport']);
Route::get('milling_services', [FirebaseController::class, 'millingServices']);
Route::get('repair', [FirebaseController::class, 'repair']);
Route::get('chores', [FirebaseController::class, 'chores']);
Route::get('hairstyle_beauty', [FirebaseController::class, 'hairstyleBeauty']);
Route::get('other_services', [FirebaseController::class, 'otherServices']);
Route::get('single_service/{product}', [FirebaseController::class, 'singleService']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

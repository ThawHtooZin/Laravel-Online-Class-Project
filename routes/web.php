<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('about', [HomeController::class, 'about']);

// Route::get('/', function(){
//   $data = [
//     'Home_key' => 'Home_value'
//   ];
//   return view('home', compact('data'));
// });
//
// Route::get('about', function () {
//   $data = [
//     'About_key' => 'About_value'
//   ];
//   return view('about', compact('data'));
// });
//
// Route::get('contact', function () {
//   $data = [
//     'Contact_key' => 'Contact_value'
//   ];
//   return view('contact', compact('data'));
// });

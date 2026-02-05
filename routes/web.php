<?php

use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/about-me', function () {
    return view('about');
})->name('about');
// Route::get('/contact-me', function () {
//     return view('contact');
// })->name('contact');
Route::view('contact-me','contact',[
    'page_name'=>'this is contact page',
    'page_description'=>'this page where you can contact me by email or whatsapp '
]);
Route::view('category','category',[
    'page_name'=>'this is contact page',
    'page_description'=>'this page where you can contact me by email or whatsapp '
]);
Route::get('/category', function () {
    $name = request('name');
    return $name ; 
}) ;
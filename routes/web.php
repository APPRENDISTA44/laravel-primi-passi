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
}) -> name('homepage');

Route::get('/policy', function () {
    return view('policy');
}) -> name('policy');

Route::get('/faq', function () {
    $faqs_prima = config('faqs.lista_faqs_prima');
    $faqs_dopo = config('faqs.lista_faqs_dopo');

    return view('faq',[
      'faqs_prima' => $faqs_prima,
      'faqs_dopo' => $faqs_dopo
    ]);
}) -> name('faq');

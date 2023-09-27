<?php

use Billplz\Laravel\Billplz;
use Illuminate\Support\Facades\Route;

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
    $bill = Billplz::bill()->create(
        env('BILLPLZ_COLLECTION_ID'),
        'munajaf@duck.com',
        null, // this is phone number
        'Ammar Munajaf',
       '1000', // RM10
        '-',
        'Cart Payment',
        ['redirect_url' => 'http://derp.test'] // after complete payment redirect to what site
    );

    return response()->json($bill->getContent());
});

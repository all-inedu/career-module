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
    return view('index');
});

Route::get('/digital-marketing/intro', function() {
    return view('modules/digital-marketing/index');
});

/* data scientist route */
Route::get('/data-scientist/1', function() {
    return view('modules/data-scientist-part/part-1');
});

Route::get('/data-scientist/2', function() {
    return view('modules/data-scientist-part/part-2');
});

Route::get('/data-scientist/3', function() {
    return view('modules/data-scientist-part/part-3');
});

// Route::get('/data-scientist/4', function() {
//     return view('modules/data-scientist-part/part-3');
// });

// Route::get('/data-scientist/case-studies', function() {
//     return view('modules/data-scientist-part/part-4');
// });

// Route::get('/data-scientist/reflection', function() {
//     return view('modules/data-scientist-part/part-5');
// });

// Route::get('/data-scientist/glossary', function() {
//     return view('modules/data-scientist-part/part-6');
// });

// Route::get('/data-scientist/glossary', function() {
//     return view('modules/data-scientist-part/part-6');
// });

// Route::get('/data-scientist/other-resources', function() {
//     return view('modules/data-scientist-part/part-7');
// });
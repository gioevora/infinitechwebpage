<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('Home/index');
// });


Route::get('/admin/employee', function () {
    return view('Admin/Employee');
});
Route::get('/infinitech/page-not-found', function () {
    return view('Page/PageNotFound');
});

Route::get('/infinitech', function () {
    return view('Home/index');
});



Route::get('/admin/all', [MainController::class, 'all']);
Route::post('/admin/add', [MainController::class, 'add']);
Route::get('/admin/del/{id}', [MainController::class, 'del']);
Route::post('/admin/upd', [MainController::class, 'upd']);
Route::get('/admin/edit/{id}', [MainController::class, 'edit']);
Route::get('/infinitech/{id}', [MainController::class, 'viewEmployee']);


Route::get('/download-vcard', [MainController::class, 'downloadVCard']);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\photogalleryController;

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
//Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/photogallery_index',[photogalleryController::class,'create']); 
Route::post('/photogallery_index',[photogalleryController::class,'store']);
Route::get('/viewgallery',[photogalleryController::class,'show']);

Route::get('/', function () {
    return view('photogallery/photogallery_index');
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/emp_index', function () {
    return view('employee/emp_index');
});

Route::get('/emp_dashboard', function () {
    return view('employee/emp_dashboard');
});

Route::get('/add_cate', function () {
    return view('employee/add_cate');
});

Route::get('/manage_cate', function () {
    return view('employee/manage_cate');
});

Route::get('/add_prod', function () {
    return view('employee/add_prod');
});

Route::get('/manage_prod', function () {
    return view('employee/manage_prod');
});

Route::get('/manage_cus', function () {
    return view('employee/manage_cus');
});

Route::get('/manage_feed', function () {
    return view('employee/manage_feed');
});

Route::get('/manage_cont', function () {
    return view('employee/manage_cont');
});


<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;




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
Route:: get('/',function(){return view('welcome');});
Route::get('/admin/index', [AdminController::class,'index']);
Route::get('/admin/list', [AdminController::class,'list']);
Route::get('/admin/form', [AdminController::class,'form']);
Route::get('/admin/calendar', [AdminController::class,'calendar']);
Route::get('/admin/uiElementsModals', [AdminController::class,'uiElementsModals']);
Route::get('/admin/lay', function(){return view('admin.layout');
});


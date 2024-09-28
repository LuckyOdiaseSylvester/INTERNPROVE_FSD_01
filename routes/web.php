<?php
// use Auth;
use Illuminate\Support\Facades\Route;
// use Auth;
use Illuminate\Support\Facades\Auth;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit-employee/{id}', [App\Http\Controllers\HomeController::class, 'edit_employee_page'])->name('edit-employee');
Route::get('/add-employee', [App\Http\Controllers\HomeController::class, 'add_employee'])->name('add-employee');
Route::get('/view-employee', [App\Http\Controllers\HomeController::class, 'view_employee'])->name('view-employee');
Route::post('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/view/{id}', [App\Http\Controllers\HomeController::class, 'view'])->name('view');










<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', [\App\Http\Controllers\Client\HomeController::class , 'index']);


route::prefix('/adminpanel')->group(function (){

    route::get('/' , function (){
        return view('Admin.home');
    });

    route::resource('categories' , CategoryController::class);

//    route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('panel.categories.index');
//    route::get('/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('panel.categories.create');
//    route::post('/categories/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('panel.categories.store');
//    route::get('/categories/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('panel.categories.edit');
//    route::patch('/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('panel.categories.update');
//    route::delete('/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('panel.categories.destroy');
});

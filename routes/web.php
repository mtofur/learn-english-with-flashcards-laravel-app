<?php
namespace App\Http\Controllers;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('panel')->group(function(){

  Route::match(['get','post'],'', [AdminController::class , 'index'])->name('adminHome');
  Route::get('words', [AdminController::class, 'words'])->name('words');
  Route::get('words/delete/{id}', [AdminController::class, 'destroy'])->name('deleteWord');
  Route::get('words/edit/{id}', [AdminController::class, 'edit'])->name('editWord');
  Route::post('words/update/{id}', [AdminController::class, 'update'])->name('updateWord');

});

<?php

use App\Http\Controllers\EletroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', [EletroController::class,'index'])->name('index');

Route::prefix('app')->group(function(){

    Route::get('/create', [EletroController::class,'create'])->name('create');
    Route::post('/store', [EletroController::class,'store'])->name('store');
    Route::get('/show/{id}', [EletroController::class,'show'])->name('show');
    Route::get('/edit/{id}', [EletroController::class,'edit'])->name('edit');
    Route::put('/update/{id}', [EletroController::class,'update'])->name('update');
    Route::delete('/{id}', [EletroController::class,'destroy'])->name('destroy');
});

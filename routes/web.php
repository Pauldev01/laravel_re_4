<?php

use App\Http\Controllers\FruitsController;
use App\Http\Controllers\LegumesController;
use App\Http\Controllers\AddFruitController;
use App\Http\Controllers\AddLegumeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\EditLegumeAdmin;
use App\Http\Controllers\EditFruitAdmin;

use App\Http\Controllers\FruitAdmController;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\LegumeAdmController;

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/fruits',[FruitsController::class,'fruit']);

Route::get('/fruit-show/{id}',[FruitController::class, 'show'])->name('show');

Route::get('/fruitadm',[FruitAdmController::class, 'index'])->name('fruitadm');
Route::get('/fruit-showadm/{id}',[FruitAdmController::class, 'show'])->name('show');
Route::post('/fruit-delete/{id}',[FruitAdmController::class, 'destroy']);

Route::get('/legumes',[LegumesController::class,'legume']);
Route::get('/legume-show/{id}',[LegumeController::class, 'show'])->name('show');

Route::get('/legumeadm',[LegumeAdmController::class, 'index'])->name('legumeadm');
Route::get('/legume-showadm/{id}',[LegumeAdmController::class, 'show'])->name('show');
Route::post('/legume-delete/{id}',[LegumeAdmController::class, 'destroy']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/admin',[AdminController::class, 'index']);

Route::get('/administration', function (Request $request){

    if( Str::contains($request->reponse,"@")){
        return view('admin');
    }else{
        return redirect()->back();
    }
});

Route::get('/addfruit',[AddFruitController::class,'index'])->name('addfruit');
Route::post('/addfruit-store',[AddFruitController::class,'store']);

Route::get('/addlegume',[AddLegumeController::class,'index'])->name('addlegume');
Route::post('/addlegume-store',[AddLegumeController::class,'store']);

Route::get('/editfruitadm/{id}',[EditFruitAdmin::class,'edit']);
Route::post('/fruit-update/{id}',[EditFruitAdmin::class,'update']);

Route::get('/editlegumeadm/{id}',[EditLegumeAdmin::class,'edit']);
Route::post('/legume-update/{id}',[EditLegumeAdmin::class,'update']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ConfigController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reportar',[HomeController::class,'getReportar']);
Route::post('/reportar',[HomeController::class,'postReportar']);

Route::group(['middleware'=>'admin'],function(){

    //usuarios
    Route::get('/usuarios',[UserController::class,'index']);
    Route::post('/usuarios',[UserController::class,'store']);

    Route::get('/usuario/{id}',[UserController::class,'edit']);
    Route::post('/usuario/{id}',[UserController::class,'update']);
    Route::get('/usuario/{id}/eliminar',[UserController::class,'delete']);

    //proyectos
    Route::get('/proyectos',[ProjectController::class,'index']);
    Route::post('/proyectos',[ProjectController::class,'store']);

    
    Route::get('/proyecto/{id}',[ProjectController::class,'edit']);
    Route::post('/proyecto/{id}',[ProjectController::class,'update']);
    Route::get('/proyecto/{id}/eliminar',[ProjectController::class,'delete']);

    Route::get('/proyecto/{id}/restaurar',[ProjectController::class,'restore']);


    //Categorias
    Route::post('/categorias',[CategoryController::class,'store']);
    Route::post('/categoria/{id}', 'CategoryController@update');

    //Level
    Route::post('/niveles','LevelController@store');
    Route::post('/nivel/{id}','LevelController@update');



    Route::get('/config',[ConfigController::class,'index']);


});

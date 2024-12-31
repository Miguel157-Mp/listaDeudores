<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
Route::get('/', function () {
    return view('task.index');
});
*/
/*acceder al metodo index a la clase */
Route::get('/',  [TaskController::class,'index']);
Route::post('/',  [TaskController::class,'store']);
Route::delete('/{id}',  [TaskController::class,'destroy'])->name('task.destroy');

// Route::post('/', function () {
//    print_r($_POST);
// });
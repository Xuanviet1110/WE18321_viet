<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//http://127.0.0.1:8000/ => base url 
Route::get('/', function () {
    echo 'Trang chủ';
    });
Route::get('/test', function () {
echo '123';
});
Route::get('/list-user', [UserController::class, 'showUser']);
Route::get('/sinh-vien', [UserController::class, 'showSinhvien']);
//pram
//http://127.0.0.1:8000/user?id=1&name=long
Route::get('/update-user', [UserController::class, 'updateUser']);
//slug
//http://127.0.0.1:8000/user/1

Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);
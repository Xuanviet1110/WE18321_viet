<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
//http://127.0.0.1:8000/ => base url 
Route::get('/', function () {
    echo 'Trang chủ';
    });
Route::get('/test', function () {
echo '123';
});
Route::get('list-user', [UserController::class, 'showUser']);
Route::get('/sinh-vien', [UserController::class, 'showSinhvien']);
//pram
//http://127.0.0.1:8000/user?id=1&name=long
Route::get('/update-user', [UserController::class, 'updateUser']);
//slug
//http://127.0.0.1:8000/user/1

Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);



//http://127.0.0.1:8000/user/add-user
Route::group(['prefix'=>'users','as'=>'users.'], function(){
    Route::get('list-users',[UserController::class, 'listUsers'])->name('listUsers');
    Route::get('add-users',[UserController::class, 'addUsers'])->name('addUsers');

    Route::post('add-users',[UserController::class,'addPostUsers'])->name('addPostUsers'); 
    Route::get('delete-users/{idUser}',[UserController::class,'deteleUser'])->name('deteleUser');   
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
    Route::get('delete-product/{idProduct}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
    Route::get('update-product/{idProduct}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::post('update-product', [ProductController::class, 'updatePostProduct'])->name('updatePostProduct');
    Route::get('search', [ProductController::class, 'searchProduct'])->name('searchProduct');
});

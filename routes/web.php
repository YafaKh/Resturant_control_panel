<?php


use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\TablesController;
use App\Models\customer;

Route::get('/', [AdminController::class,'index']);

Route::prefix('/customers')->group(function(){
    Route::get('/', [CustomersController::class,'list'])->name('customers');
    Route::get('/add', [CustomersController::class,'add'])->name('addCustomer');
    Route::post('/insert', [CustomersController::class,'insert'])->name('insertCustomer');
    Route::get('/{id}/edit', [CustomersController::class,'edit'])->name('editCustomer');
    Route::get('/{id}/update', [CustomersController::class,'edit'])->name('updateCustomer');
});
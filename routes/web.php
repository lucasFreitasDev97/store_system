<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('layouts.default');
});

Route::get('suppliers/index', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('suppliers/show/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
Route::get('suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('suppliers/store/{supplier}', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('suppliers/edit/{supplier}', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::put('suppliers/update/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('suppliers/destroy/{destroy}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

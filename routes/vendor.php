<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vendor\VendorDashboardController;

Route::prefix('vendor')->group(function(){
    Route::middleware(['auth', 'role:vendor'])->group(function(){
        Route::get('/dashboard', [VendorDashboardController::class, 'index'])->name('vendor.dashboard');
    });
});


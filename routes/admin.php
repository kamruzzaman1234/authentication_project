<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::prefix('admin')->group(function(){
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    });
    
});


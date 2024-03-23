<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminSkillController;
// use App\Http\Controllers\Admin\AdminFileController;

Route::get('/Home', [HomeController::class, 'Home']);

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');

Route::prefix('admin')->group(function () {
    Route::get('/users', [AdminUserController::class, 'show'])->name('admin_user_show');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin_user_create');
    Route::post('/users/store', [AdminUserController::class, 'store'])->name('admin_user_store');
    Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin_user_edit');
    Route::post('/users/{id}/update', [AdminUserController::class, 'update'])->name('admin_user_update');
    Route::get('/users/{id}/delete', [AdminUserController::class, 'delete'])->name('admin_user_delete');
    Route::get('/skill', [AdminSkillController::class, 'show'])->name('admin_skill_show');
    Route::get('/skill/create', [AdminSkillController::class, 'create'])->name('admin_skill_create');
    Route::post('/skill/store', [AdminSkillController::class, 'store'])->name('admin_skill_store');
    Route::get('/skill/{id}/delete', [AdminSkillController::class, 'delete'])->name('admin_skill_delete');
   
});

// Route::get('/admin/skills', [AdminSkillController::class, 'show'])->name('admin.skill.show');

// // Menampilkan formulir untuk membuat skill baru
// Route::get('/admin/skills/create', [AdminSkillController::class, 'create'])->name('admin.skill.create');
// // 
// // Menyimpan skill baru
// Route::post('/admin/skills/store', [AdminSkillController::class, 'store'])->name('admin.skill.store');

// // Menghapus skill
// Route::delete('/admin/skills/{id}', [AdminSkillController::class, 'delete'])->name('admin.skill.delete');
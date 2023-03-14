<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/search', [DashboardController::class, 'search'])->name('search');

//Route::post('/upload', [ImageController::class, 'upload'])->name('image.store')->middleware('auth', 'verified');
//Route::post('/upload/delete', [ImageController::class, 'delete'])->name('image.destroy')->middleware('auth', 'verified');

//Upload images using dropzone
//Route::get('post/upload', [PostController::class, 'postUpload'])->name('post.create')->middleware('auth', 'verified');
Route::post('post/upload/store', [PostController::class, 'postStore'])->name('post.store')->middleware('auth', 'verified');

//Route::get('image/upload', [ImageController::class, 'dropzoneUpload'])->name('dropzone.image.create')->middleware('auth', 'verified');
Route::get('/image/{id}', [ImageController::class, 'show'])->name('image.show');
Route::get('/upload/{post}', [ImageController::class, 'create'])->name('image.create')->middleware('auth', 'verified');
Route::post('image/upload/store', [ImageController::class, 'dropzoneUploadStore'])->name('dropzone.image.store')->middleware('auth', 'verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

# Homepage
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('home');

# Project
Route::get('/project', [App\Http\Controllers\Front\ProjectController::class, 'index'])->name('project');
Route::get('/project/{id}', [App\Http\Controllers\Front\ProjectController::class, 'show'])->name('project.show');

# Resume
Route::get('/resume', [App\Http\Controllers\Front\ResumeController::class, 'index'])->name('resume');

#Blog
Route::get('/blog', [App\Http\Controllers\Front\BlogPostController::class, 'index'])->name('blog.post');
Route::get('/blog/{category}', [App\Http\Controllers\Front\BlogPostController::class, 'blogByCategory'])->name('blog.post.category');
Route::get('/blog/{slug}', [App\Http\Controllers\Front\BlogPostController::class, 'show'])->name('blog.post.show');

Route::get('/', function () {
    return view('home');
});

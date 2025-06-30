<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Route::resource('posts', PostController::class);
//
//Route::get('/first_or_create', [\App\Http\Controllers\PostController::class, 'first_or_create'])
//    ->name('posts.first_or_create');

//Route::get('/admin/main', [\App\Http\Controllers\Admin\AdminMainController::class, 'index'])->name('admin.main.index');
Route::get('/admin/post', [\App\Http\Controllers\Admin\AdminPostController::class, 'index'])->name('admin.post');
Route::get('/admin/post/create', [\App\Http\Controllers\Admin\AdminCreateController::class, 'create'])->name('admin.create');
Route::POST('/admin/post/store', [\App\Http\Controllers\Admin\AdminStoreController::class, 'store'])->name('admin.store');
//Route::get('/admin/{id}/show', [\App\Http\Controllers\Admin\AdminShowController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/show', [\App\Http\Controllers\Admin\AdminShowController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/edit', [\App\Http\Controllers\Admin\AdminEditController::class, 'edit'])->name('admin.edit');

//Verb	 URI	Action	Route  Name
//GET	/photos	index	photos.index
//GET	/photos/create	create	photos.create
//POST	/photos	store	photos.store
//GET	/photos/{photo}	/show	photos.show
//GET	/photos/{photo}/edit	edit	photos.edit
//PUT/PATCH	/photos/{photo}	update	photos.update
//DELETE	/photos/{photo}	destroy	photos.destroy

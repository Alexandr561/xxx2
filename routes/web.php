<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::resource('posts', PostController::class);

Route::get('/first_or_create', [\App\Http\Controllers\PostController::class, 'first_or_create'])
    ->name('posts.first_or_create');

Route::get('/admin', [\App\Http\Controllers\Admin\AdminIndexController::class, 'index']) ->name('admin.index');
Route::get('/admin/create', [\App\Http\Controllers\Admin\AdminCreateController::class, 'create']) ->name('admin.create');
Route::POST('/admin', [\App\Http\Controllers\Admin\AdminStoreController::class, 'store']) ->name('admin.store');
Route::get('/admin/{post}', [\App\Http\Controllers\Admin\AdminShowController::class, 'show']) ->name('admin.show');
Route::get('/admin/{post}/edit', [\App\Http\Controllers\Admin\AdminEditController::class, 'edit']) ->name('admin.edit');
Route::patch('/admin/{post}', [\App\Http\Controllers\Admin\AdminUpdateController::class, 'update']) ->name('admin.update');
Route::DELETE('/admin/{post}', [\App\Http\Controllers\Admin\AdminDestroyController::class, 'destroy']) ->name('admin.destroy');




//Verb	 URI	Action	Route  Name
//GET	/photos	index	photos.index
//GET	/photos/create	create	photos.create
//POST	/photos/store	photos.store
//GET	/photos/{photo}	/show	photos.show
//GET	/photos/{photo}/edit	edit	photos.edit
//PUT/PATCH	/photos/{photo}	update	photos.update
//DELETE	/photos/{photo}	destroy	photos.destroy

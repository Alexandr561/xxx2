<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Route::resource('posts', PostController::class);

Route::get('/first_or_create', [\App\Http\Controllers\PostController::class, 'first_or_create'])
    ->name('posts.first_or_create');
//Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::any('/posts/{param}', [\App\Http\Controllers\PostController::class, 'index']);
Route::any('/posts2/{param2}', [\App\Http\Controllers\PostController::class, 'index2']);
Route::any('/posts3/{param3}', [\App\Http\Controllers\PostController::class, 'index3']);
Route::any('/postsCreate', [\App\Http\Controllers\PostController::class, 'indexCreate']);


//Verb	 URI	Action	Route  Name
//GET	/photos	index	photos.index
//GET	/photos/create	create	photos.create
//POST	/photos	store	photos.store
//GET	/photos/{photo}	show	photos.show
//GET	/photos/{photo}/edit	edit	photos.edit
//PUT/PATCH	/photos/{photo}	update	photos.update
//DELETE	/photos/{photo}	destroy	photos.destroy

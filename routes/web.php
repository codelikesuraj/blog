<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('show-post');

Route::get('/categories/{category:slug}',  function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
        'current_category' => $category,
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('/authors/{author:username}',  function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author']),
        'categories' => Category::all(),
    ]);
});

/////////////////////////////////
// not part of the tutorial /////

Route::get('/authors', function () {
    return view('authors', [
        'authors' => User::all()
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

///////////////////////////////
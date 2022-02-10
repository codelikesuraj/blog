<?php

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

Route::get('/', function () {
    return view('posts', [
        'posts'=> Post::latest('published_at')->with('author', 'category')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}',  function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author'])
    ]);
});

Route::get('/authors/{author:username}',  function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
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
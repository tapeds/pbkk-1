<?php

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Farrell Matthew Lim'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::All()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
   return view('post', ['title' => 'Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function(User $user){
    return view(('posts'), ['title' => count($user->posts) . ' Articles by' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categoreis/{category:slug}', function(Category $category){
    return view('posts', ['title' => 'Posts by Category : ' . $category->name, 'posts' => $category->posts]);
});

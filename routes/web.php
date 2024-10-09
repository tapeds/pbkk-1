<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'nama' => 'Farrell']);
});

Route::get('/posts', function () {
    $posts = Post::with(['author', 'category'])->latest()->get();

    return view('posts', ['title' => 'Blog', 'posts' => $posts ]);
});

Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    $posts = $user->posts->Load(['category', 'author']);

    return view(('posts'), ['title' => count($posts) . ' Articles by' . $user->name, 'posts' => $posts]);
});

Route::get('/categoreis/{category:slug}', function(Category $category){
    $posts = $category->posts->Load(['category', 'author']);

    return view('posts', ['title' => 'Posts by Category : ' . $category->name, 'posts' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all(){
        return [
            [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Sandika Galih',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Farrell Matthew Lim',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],
        ];
    }
    public static function find($id): array
    {
        $findPost = Arr::first(static::all(), fn ($post) => $post['id'] == $id);

        if(! $findPost){
            abort(404);
        }
        return $findPost;
    }
}

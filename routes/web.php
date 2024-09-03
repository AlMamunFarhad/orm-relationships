<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Support\Facades;

Route::get('/', function () {
    return view('welcome');
});

// Schema::disableForeignKeyConstraints();

// User::truncate();
// Post::truncate();
// Comment::truncate();

// has one 
// dd(Comment::find(1)->user->name);
// has one inverse
dd(User::find(1)->comment->message);


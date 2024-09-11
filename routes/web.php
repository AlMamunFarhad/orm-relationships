<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Support\Facades;

Route::get('/', function () {
    // return view('welcome');
   
   // $user = [
    
   //  'name'=> 'Farhad',
   //  'email'=> 'farh@gmail.com',
   //  'password'=> 'secret123',

   // ];
// $newUser = new User($user);

// $comment = Comment::find(1)->user()->save($newUser);
// $comment = Comment::find(5)->user()->update($user);
// $comment = Comment::find(9)->user()->delete();

// return "Deleted";

// dd(User::find(1)->posts);
// dd(Post::find(1)->user);

// $post1 = new Post(['title'=> 'My name is farhad 4', 'body'=> 'This is body.']);
// $post2 = new Post(['title'=> 'My name is farhad 5', 'body'=> 'This is body.']);

// User::find(1)->posts()->saveMany([$post1, $post2]);

// return response(200);

    // dd(User::find(1)->posts()->delete());


    // dd(User::find(1)->posts()->where('id', '=', 19)->delete());

    // dd(User::find(1)->posts()->whereId(20)->delete());

    // Comment::find(1)->post()->associate(Post::find(1))->save();

    // $comment = Comment::find(9);
    // $post = Post::find(4);
    // $comment->post()->associate($post);
    // $comment->save();


   // dd(Comment::find(1)->post->title);

    // $post = Comment::find(1)->post;
    // $post->title = 'new title';
    // $post->body = 'new body';
    // $post->save();

    // $post = Post::find(2);
    // // dd($post->user->name);
    // // dd($post->comments);

    // $post->title = 'UPDATED FIRST ONE POST';
    // $post->check_comment->message = 'UPDATED FIRST ONE CHECK MESSAGE';
    // $post->user->name = 'Farhad';

    // $post->push();

    // dd($post->user->name);

// dd(Post::find(2)->user()->delete());


//#### ORM Relationships Has One and Many Through ####//

// $comment = ['message'=> 'Hello form Comment.'];


// User::find(1)->postComment()->update($comment);


// dd(User::find(1)->postComment()->orderBy('id', 'asc')->first()->message);

   // $message = ['message'=> "Comment updated"];

   //  dd(User::find(3)->postComment()->get()->where('id',5)->first()->update($message));

$message = ['post_id' => 10, 'message' => "Comment created new anothor"];
// dd(User::find(1)->postComment()->create($message));
// dd(User::find(1)->postComment()->updateOrCreate($message));

// dd(User::find(1)->postComment()->first());

// dd(User::find(1)->postComment()->latest()->first());
// $comment = User::find(1)->postComment()->latest()->first();

// $comment->message = "Laravel is awesome 1.";
// $comment->save();


// dd(User::find(1)->postComment[0]->post->user->posts->each(function ($post){
//    $post->id === 9 ? $post->delete() : $post->refresh();
// }));



$comment = ['message'=> "Farhad " . fake()->sentence];

// User::find(3)->postComments()->create($post);
User::find(3)->postComments()->first()->delete();





});

// Schema::disableForeignKeyConstraints();

// User::truncate();
// Post::truncate();
// Comment::truncate();

// has one 
// dd(Comment::find(1)->user->name);
// has one inverse
// dd(User::find(1)->comment->message);


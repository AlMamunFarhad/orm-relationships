<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserTestEmail;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Image;
use App\Models\Tag;
use App\Jobs\TestJob;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    
    TestJob::dispatch();
    return 'job Dispatched.';
});

Route::get('/mail', function() {

 // $users = User::all();

 // foreach ($users as $user) {
     
 //     Mail::to($user)->send(new UserTestEmail($user));

 // }


$user = User::find(1);

Mail::to($user)->send(new UserTestEmail($user));


 return 'welcome send your Email.';
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Route::get('/', function () {










// #### Sending Emails #### //

// $user = new User();
// $user->email = 'farhad@gamil.com';
// $user->name = 'Farhad';


// Mail::send(new UserTestEmail($user));

// return "<h1>Send Eamil</h1>";

// Mail::send('test_mail', ['name'=>'Farhad'], function($message){
//     $message->to('farhadmikky@gmail.com', 'Farhad This is my first mail');
// });

// return 'Send Email';


// #### Sending Emails End #### //


    // dd(User::find(1)->posts);

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

// $message = ['post_id' => 10, 'message' => "Comment created new anothor"];
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



// $comment = ['message'=> "Farhad " . fake()->sentence];

// // User::find(3)->postComments()->create($post);
// User::find(3)->postComments()->first()->delete($);


//#### ORM Relationships Many to Many ####//

// $user = User::find(3);

// $user->roles()->attach(1); 

// $user->roles()->detach(1);
// $user->roles()->sync([1]);
// $user->roles()->syncWithoutDetaching([1,2,3,4]);

// $user->roles()->create(['name'=>'Abdullah']);



// $role = new Role(['name'=>'Farhad']);

// $user->roles()->save($role);

// $user->roles()->toggle(1);

// $user->roles()->toggle([3 => ['created_at'=> now()]]);

// Role::destroy([4,6]);


// $user->roles()->updateExistingPivot(2, ['user_id'=> 3]);

// $comment = new Comment(['message'=>'This is comment']);

// dd(Post::find(1)->comments()->save($comment));




//#### ORM Relationships Polymorphic One to One ####//

// $user = User::find(4);
// $post = Post::find(1);
// $img = new Image(['path'=> fake()->imageUrl('100','50')]);

// $image = Image::find(12);
// dd($image->imageable);

// dd($image->imageable()->delete());


// $post->image()->save($img);
// dd($post->image()->update(['path'=> fake()->imageUrl('100','50')]));

// dd($user->image()->delete());


// return "Successfully added.";


    //#### ORM Relationships Polymorphic One to One ####//

    //#### Polymorphic One to many / Many to many ####//




   // $user = User::find(3);

   // dd($user->images->each(function($image){

   // dd($image);

   // }));

   // dd($user->latestImage);
   // dd($user->oldestImage);

   //  $post = Post::find(1);
   //  $comment = Comment::find(1);

   // echo $comment->message;

    // $tag = new Tag;

    // $tag->name = "PHP";
    // dd($post->tags[3]->pivot->created_at);

         // $post->tags()->save($tag);

     // $comment->tags()->save($tag);




    // dd(Tag::find(4)->comments[0]->delete());



// });

// Schema::disableForeignKeyConstraints();

// User::truncate();
// Post::truncate();
// Comment::truncate();

// has one 
// dd(Comment::find(1)->user->name);
// has one inverse
// dd(User::find(1)->comment->message);


// #### File Storage ####


Route::get('/create', function() {


  // Storage::put('example.txt', 'Nice');

    // Storage::createDirectory('FARHAD');


    // Storage::makeDirectory('FARHAD');

    // $directory = "abdullah";

    // Storage::makeDirectory($directory);


    Storage::disk('custom')->put('example.txt', 'This is file');

  
  return back();




});

Route::get('/delete', function() {

  // Storage::delete('example.txt');

  // return back();


});

Route::post('/upload', function(Illuminate\Http\Request $request){
   
   // dd($request->upload->move('images', uniqid().'/'. $request->file('upload')->getClientOriginalName())); 
    // $request->upload->move('images', $request->file('upload')->getClientOriginalName());

   
    // Storage::put('new_image', $request->file('upload'));

    Storage::copy('images/nZ24VnbGPXjTGXrTEvT2TES33qfTpiVA6HCUZhuE.jpg', 'new_name/new_girl.jpg');

   // $request->upload->store('link_img');

    return back();

});

// #### File Storage End ####




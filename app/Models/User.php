<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


  public function posts()
    {
       return $this->hasMany(Post::class);
    }
    
    public function postComment(){

     //    return $this->hasManyThrough(Comment::class,
     //     Post::class, 
     //     'user_id', 
     //     'post_id',
     //     'id',
     //     'id'
     // );

        // return $this->through('posts')->has('comments');

        return $this->throughPosts()->hasComments();

   



    }

   public function postComments(){

   return $this->hasManyThrough(Comment::class, Post::class);

   }


   public function roles(){

   return $this->belongsToMany(Role::class);

   }


   public function image() : MorphOne {
 
   return $this->morphOne(Image::class, 'imageable');

   }

    public function images() : MorphMany{
    return $this->morphMany(Image::class, 'imageable');
   }

    public function latestImage() : MorphOne{

    return $this->morphOne(Image::class, 'imageable')->latestOfMany();
    }
     
    public function oldestImage() : MorphOne{

    return $this->morphOne(Image::class, 'imageable')->oldestOfMany();

    }


   


    // public function comments(){
      
    //     return $this->belongsTo(Comment::class);
    // }





}

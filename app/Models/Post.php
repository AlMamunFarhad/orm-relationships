<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title','body'];

    protected $guarded = [];

    public function comments(){

        return $this->hasMany(Comment::class);
    }    

    // public function check_comment(){

    //     return $this->hasOne(Comment::class);
    // }

    public function user(){

    return $this->belongsTo(User::class);

    }

   public function image() : MorphOne {
 
     return $this->morphOne(Image::class, 'imageable');

   }

   public function images() : MorphMany{
    return $this->morphMany(Image::class, 'imageable');
   }

   public function tags() : MorphToMany {

   return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
   
   }

}

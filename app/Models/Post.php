<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

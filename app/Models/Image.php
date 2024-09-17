<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Image extends Model
{
    use HasFactory;

   // protected $guarded = [];

    public function imageable() : MorphTo {

     return $this->morphTo();

    }   

    //  public function imageable() : MorphOne {

    //  return $this->morphOne(Image::class );

    // }
}

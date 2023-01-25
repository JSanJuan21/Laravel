<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion 1/N inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion N/M
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion 1/1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}

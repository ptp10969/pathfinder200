<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    //1 Category has many Posts(s)
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

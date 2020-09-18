<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $with = ['category'];
    function category(){
        return $this->belongsToMany(Category::class,"book_categories");
    }
}

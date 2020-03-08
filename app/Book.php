<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'image',
        'isbn',
        'author',
        'price'
    ];
}

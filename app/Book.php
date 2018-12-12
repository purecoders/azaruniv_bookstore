<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name', 'author', 'description', 'publisher', 'publication_date', 'price', 'stock', 'image_path'
    ];
}

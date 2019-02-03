<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'category_id', 'name', 'author', 'description', 'publisher', 'publication_date', 'price', 'stock', 'image_path', 'is_important', 'page_count'
    ];
}

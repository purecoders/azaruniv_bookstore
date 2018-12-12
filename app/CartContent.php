<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartContent extends Model
{
    use SoftDeletes;

    protected $fillable = ['cart_id', 'book_id', 'count'];
}

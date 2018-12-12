<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;


    protected $fillable = ['user_id'];


    public function content(){
      return $this->hasMany('App\CartContent');
    }


}

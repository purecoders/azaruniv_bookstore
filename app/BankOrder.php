<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankOrder extends Model
{
  use SoftDeletes;

  protected $fillable = ['cart_id', 'address', 'phone', 'postal_code', 'amount'];


  public function cart(){
    return $this->belongsTo('App\Cart');
  }
}

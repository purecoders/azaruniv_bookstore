<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'payment_id', 'address', 'phone', 'postal_code', 'is_sent', 'trace_no'];


    public function content(){
      return $this->hasMany('App\OrderContent');
    }

    public function payment(){
      return $this->hasOne('App\Payment');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }
}

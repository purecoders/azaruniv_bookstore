<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'amount', 'is_succes', 'retrival_ref_no', 'system_trace_no'
    ];
}

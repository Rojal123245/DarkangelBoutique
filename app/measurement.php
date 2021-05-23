<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class measurement extends Model
{
    use SoftDeletes;
    protected $table = 'measurement';
    protected $guarded = [];
}

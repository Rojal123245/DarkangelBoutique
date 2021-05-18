<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Measurement extends Model
{
    protected $casts = [
        'measurement_column' => 'array'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'prod_name', 'prod_price', 'prod_type', 'status', 'prod_desc', 'prod_img','categories_id'
    ];
}

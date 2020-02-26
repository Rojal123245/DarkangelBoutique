<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $table = 'categories';

    public function getRouteKeyName()
    {
       return 'category_name';
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

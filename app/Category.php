<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $table = 'categories';

    public function category(){
        return $this->belongsTo('App\Category');
    }
}

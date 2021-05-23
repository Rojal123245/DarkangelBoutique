<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_Measurement extends Model
{
    use SoftDeletes;

    protected $casts = [
        'measurement_column' => 'array'
    ];
    protected $table = 'categories_measurement';
    protected $guarded = [];
    public function setMeasurement_columnAttribute($value)
    {
        $properties = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $properties[] = $array_item;
            }
        }

        $this->attributes['measurement_column'] = json_encode($properties);
    }
}

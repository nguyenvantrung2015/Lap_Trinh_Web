<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'product_id',
        'image',
    ];

    function service()
    {
        return $this->belongsTo(Product::class);
    }
}

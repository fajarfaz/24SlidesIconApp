<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = [
        'name','categories_id'
    ];
    public function category()
    {
    	return $this->belongsTo(Categories::class);
    }
}

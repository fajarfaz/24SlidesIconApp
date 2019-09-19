<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    protected $table = 'illustration';
    protected $fillable = [
        'name','categories_id'
    ];
    public function category()
    {
    	return $this->belongsTo(Categories::class);
    }
}

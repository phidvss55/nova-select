<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'categories';

    protected $fillable = ['*'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

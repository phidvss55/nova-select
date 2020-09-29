<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'products';

    protected $fillable = ['*'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'description', 'image'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}

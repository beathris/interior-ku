<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Product extends Model
{
    use HasUuid;
    protected $table = 'product';
    protected $fillable = ['name','ingredient','ingredient_price'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function detail_product(){
        return $this->hasMany(DetailProduct::class);
    }
}

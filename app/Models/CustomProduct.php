<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomProduct extends Model
{
    protected $table = 'custom_product';
    protected $fillable = ['name','color','ingredient_price','width','height','length','total_price'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function detail_product(){
        return $this->belongsTo(DetailProduct::class, 'detail_product_id');
    }
}

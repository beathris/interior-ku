<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class DetailProduct extends Model
{
    use HasUuid;
    protected $table = 'detail_product';
    protected $fillable = ['name', 'color', 'image1', 'image2', 'image3', 'image4', 'image5','image6', 'width', 'height', 'length', 'total_price'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

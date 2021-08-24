<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class Banner extends Model
{
    use HasUuid;
    protected $table = 'banner';
    protected $fillable = ['title', 'description', 'photo'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jamesh\Uuid\HasUuid;

class AboutUs extends Model
{
    use HasUuid;
    protected $table = 'about_us';
    protected $fillable = ['title', 'email', 'location', 'address', 'phone', 'description', 'image'];

}

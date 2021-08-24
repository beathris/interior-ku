<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StepCustom extends Model
{
    protected $table = 'step_customs';
    protected $fillable = ['step', 'description', 'image'];
}

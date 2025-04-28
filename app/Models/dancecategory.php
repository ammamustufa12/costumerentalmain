<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanceCategory extends Model
{
    protected $table = 'dancecategories';

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];
}

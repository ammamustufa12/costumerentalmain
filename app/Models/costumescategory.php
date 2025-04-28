<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostumesCategory extends Model
{
    use HasFactory;

    protected $table = 'costumescategories';

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];
}

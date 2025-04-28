<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstrumentRentalCategory extends Model
{
    use HasFactory;

    protected $table = 'instrumentrentalcategories'; // ← add this line if you don't want to rename

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];
}

<?php
// app/Models/Rental.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'costume_id',
        'rental_date',
        'return_date',
        'quantity',
        'price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function costume()
    {
        return $this->belongsTo(costumes::class,'costume_id');
    }
  
}

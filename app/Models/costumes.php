<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CostumesCategory;

class Costumes extends Model
{
    // Define the table name explicitly
    protected $table = 'costumes';

    // Define the fillable columns for mass assignment protection
    // protected $fillable = [
    //     'name', 
    //     'category_id', 
    //     'images', 
    //     'brand', 
    //     'weight', 
    //     'gender', 
    //     'sizes', 
    //     'colors', 
    //     'description', 
    //     'tag_number', 
    //     'stock', 
    //     'tags', 
    //     'price', 
    //     'discount', 
    //     'tax'
    // ];

    // // Define any casts for attributes
    // protected $casts = [
    //     'images' => 'array',    // ✅ This enables automatic JSON casting
    //     'sizes' => 'array',
    //     'colors' => 'array',
    //     'tags' => 'array',
    // ];
    protected $fillable = [
        'name', 'category_id', 'images', 'brand', 'weight', 'unit', 'gender',
        'description', 'tag_number', 'stock', 'tags',
        'price', 'discount', 'tax', 'total_price', 'color_size'
    ];

    protected $casts = [
        'images' => 'array',
        'tags' => 'array',
        'color_size' => 'array',
    ];


    // Define the relationship to the CostumesCategory model
    public function category()
    {
        return $this->belongsTo(CostumesCategory::class, 'category_id');
    }
}

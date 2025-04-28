<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstrumentRental extends Model
{
    use HasFactory;

    protected $table = 'instrument_rentals'; // Define the table name if it's different

    protected $fillable = [
        'name',
        'description',
        'image',
        'price_per_day',
        'instrumentrentalcategory_id',
    ];

    /**
     * Define the relationship with InstrumentRentalCategory.
     */
       // Define the relationship with the InstrumentRentalCategory model
       public function instrumentRentalCategory()
       {
           // Each InstrumentRental belongs to one InstrumentRentalCategory
           return $this->belongsTo(InstrumentRentalCategory::class);
       }

    /**
     * Accessor to get the full image path.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}

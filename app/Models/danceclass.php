<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DanceCategory;
use App\Models\User;

class DanceClass extends Model
{
    protected $table = 'dance_classes';

    protected $fillable = [
        'dance_category_id',
        'user_id',
        'name',
        'instructor',
        'schedule',
        'price',
        'images', 

    ];

    protected $casts = [
        'images' => 'array',    // ✅ This enables automatic JSON casting
    ];
    // Relationship with DanceCategory
    public function category()
    {
        return $this->belongsTo(DanceCategory::class, 'dance_category_id');
    }
    

    // Relationship with Instructor (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function schedules()
{
    return $this->hasMany(DanceClassSchedule::class);
}

public function studentSelections()
{
    return $this->hasMany(StudentClassSelection::class);
}

}

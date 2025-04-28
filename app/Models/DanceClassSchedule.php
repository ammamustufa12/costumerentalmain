<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanceClassSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'dance_class_id',
        'day',
        'start_time',
        'end_time',
    ];

    public function danceClass()
    {
        return $this->belongsTo(DanceClass::class);
    }
}

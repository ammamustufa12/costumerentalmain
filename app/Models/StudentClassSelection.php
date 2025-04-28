<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassSelection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dance_class_id',
        'schedule_id_1',
        'schedule_id_2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function danceClass()
    {
        return $this->belongsTo(DanceClass::class);
    }

    public function schedule1()
    {
        return $this->belongsTo(DanceClassSchedule::class, 'schedule_id_1');
    }

    public function schedule2()
    {
        return $this->belongsTo(DanceClassSchedule::class, 'schedule_id_2');
    }
}

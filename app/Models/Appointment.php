<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'doctor_id',
        'patient_name',
        'patient_phone',
        'appointment_date',
        'appointment_time',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

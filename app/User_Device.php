<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Device extends Model
{
    protected $table = "user_device";

    public function Students() {
        return $this->belongsTo('App\Student', 'student_id');
    }
    public function Teachers() {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }

    public function Devices() {
        return $this->belongsTo('App\Device', 'device_id');
    }
}

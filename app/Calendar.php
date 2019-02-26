<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table="calendars";

    public function Student() {
    	return $this->belongsTo('App\Student', 'student_id');
    }

    public function Teacher() {
    	return $this->belongsTo('App\Teacher', 'teacher_id');
    }
}

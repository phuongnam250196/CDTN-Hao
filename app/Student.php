<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function User() {
    	return $this->hasMany('App\User', 'student_id');
    }

    public function Device() {
    	return $this->hasMany('App\User_Device', 'student_id');
    }
}

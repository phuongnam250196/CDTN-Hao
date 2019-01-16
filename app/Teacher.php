<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    public function User() {
    	return $this->hasMany('App\User', 'teacher_id');
    }

    public function Device() {
    	return $this->hasMany('App\User_Device', 'teacher_id');
    }
}

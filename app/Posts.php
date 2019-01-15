<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    
    public function Student() {
    	return $this->belongsTo('App\Student', 'student_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function course(){
        return $this->belongsTo('App\Course');
    }
}

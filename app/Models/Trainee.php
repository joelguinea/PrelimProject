<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainee extends Model
{
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function course() {
        return $this->belongsTo('App\Models\\Course');
    }
}

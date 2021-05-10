<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lesson extends Model
{
    
    public function cours()
    {
        return $this->belongsTo(Cour::class,'cour_id');
    }

    public function auteur()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

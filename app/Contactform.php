<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contactform extends Model
{
    protected $table = "contactform";

    protected $fillable = [
        'nom', 'email', 'message'
    ];
}

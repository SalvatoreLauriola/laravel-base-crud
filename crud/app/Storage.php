<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    // $fillable: permette scrittura o modifica degli attributi nei form
    protected $fillable = [
        'name',
        'description'
    ];
}

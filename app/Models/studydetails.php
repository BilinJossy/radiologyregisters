<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studydetails extends Model
{
    use HasFactory;
    public function patient(){
        return $this->belongsTo('App\Models\patient','pid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class redos extends Model
{
    use HasFactory;
    public function studydetails(){
        return $this->belongsTo('App\Models\studydetails','sid');
    }
}

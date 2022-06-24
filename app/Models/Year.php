<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $table='year';

    public function getYear(){
        return $this->hasOne(Year::class,'year_id','id');
    }

}

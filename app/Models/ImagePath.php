<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    use HasFactory;
    protected $table='imagePath';

    protected $fillable = [
        'imagePath',
    ];


    public function getYear(){
        return $this->hasOne(Year::class,'year_id','id');
    }

}

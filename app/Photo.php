<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded =[];

    protected $uploads = '/codehacking/public/images/';

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}

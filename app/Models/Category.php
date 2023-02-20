<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articleCount(){

        return $this->hasMany('App\Models\Content','category_id','id')->count();
        //Bu modelde category widgeta, o kategoriye ait kaç tane yazı olduğunu alıyoruz. Countu bize o kategorideki sayıyı vereceği için yazdık.
    }

}


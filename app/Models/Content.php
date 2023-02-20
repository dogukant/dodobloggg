<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    function getCategory()
    {
       return $this->hasOne('App\Models\Category', 'id', 'category_id');
       //burada her yazının bir adet kategorisi olabileceği için hasOne metodunu kullandık.

    }
}

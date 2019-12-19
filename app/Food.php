<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function category(){

    	return $this->belongsTo('App\Category','cat_id');//cat_id is the foreign key in Food Table/Model
    }
}

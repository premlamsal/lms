<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function menu(){
    	
    	return $this->belongsTo('App\Menu');
    }
    public function food(){
    	return $this->belongsTo('App\Food');
    }
}

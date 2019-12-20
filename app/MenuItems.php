<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    public function menu(){
    	
    	$this->belongsTo('App\Menu');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuItems(){
    	
    	$this->hasMany('App\MenuItems');
    }
}

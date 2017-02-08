<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designations';


public function jobposts()
{
	return $this->hasMany('App\jobposts');
}
}

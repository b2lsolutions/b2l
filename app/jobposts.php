<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobposts extends Model
{
    public function designation()
    {
    	return $this->belongsTo(App\Designation);
    }
}

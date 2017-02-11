<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobposts extends Model
{
	protected $fillable = [
	   'user_id','id','job_title','updated_at','created_at','job_type','designation','qualification','job_location','experience','skills','job_description','job_condition','salary','last_date_for_application','number_of_vacanies'
	];
    public function designation()
    {
    	return $this->belongsTo(App\Designation);
    }
}

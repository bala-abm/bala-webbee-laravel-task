<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	protected $primaryKey = 'id';


	public function workshops(){
		return $this->hasMany('App\Models\Workshop', 'event_id', 'id');
	}
}

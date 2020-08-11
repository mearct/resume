<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $fillable = [
		'name_first',
		'name_last',
		'name_middle',
		'phone_num',
		'email',
		'designation',
		'status',
		'image',
	];
	public function scopeActive($query)
	{
		return $query->where('status', 1);
	}
	public function scopeInactive($query)
	{
		return $query->where('status', 0);
	}
}

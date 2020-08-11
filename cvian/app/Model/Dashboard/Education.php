<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $fillable = [
		'date_education',
		'course_education',
		'school_education',
		'description_education',
		'image_education',
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

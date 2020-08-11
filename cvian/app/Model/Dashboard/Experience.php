<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $fillable = [
		'experiences_name',
		'experiences_designation',
		'experiences_company',
		'experiences_description',
		'experiences_date_start',
		'experiences_date_end',
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

<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $guarded = [];

	public function scopeActive($query)
	{
		return $query->where('status', 1);
	}
	public function scopeInactive($query)
	{
		return $query->where('status', 0);
	}
	public function servicetypeicon()
	{
		return $this->belongsTo(ServiceTypeIcon::class);
	}
}

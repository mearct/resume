<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class PortfolioType extends Model
{
	protected $fillable = [
		'name_types'
	];

	public function portfolios()
	{
		return $this->hasMany(Portfolio::class);
	}
	public function scopeActive($query)
	{
		return $query->where('status', 1);
	}
	public function scopeInactive($query)
	{
		return $query->where('status', 0);
	}
}

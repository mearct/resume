<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $fillable = [
		'image_portfolio',
		'name_portfolio',
		'types_portfolio',
	];

	public function portfoliochoice()
	{
		return $this->belongsTo(PortfolioType::class);
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

<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
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

}

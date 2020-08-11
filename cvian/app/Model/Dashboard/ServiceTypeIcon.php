<?php

namespace App\Model\Dashboard;

use Illuminate\Database\Eloquent\Model;

class ServiceTypeIcon extends Model
{
  protected $guarded =[];

  public function scopeActive($query)
  {
    return $query->where('status', 1);
  }
  public function scopeInactive($query)
  {
    return $query->where('status', 0);
  }
  public function services()
  {
    return $this->hasMany(Service::class);
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = "states";

  public function localGovernments()
  {
    return $this->hasMany(LocalGovt::class, 'state_id');
  }

  public function localGovernmentsCount()
  {
      return $this->localGovernments()->count();
  }

  public static function findByName($name)
  {
    return Self::where('name', $name)->first();
  }

  

}

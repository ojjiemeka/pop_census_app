<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalGovt extends Model
{
    use HasFactory;

    protected $table = "local_govt";

  public function state()
  {
    return $this->belongsTo(State::class);
  }
}

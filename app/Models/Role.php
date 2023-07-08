<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * The function "getRoles" returns an array of role names with their corresponding IDs.
     * 
     * @return a collection of roles, where the role names are the values and the role IDs are the
     * keys.
     */
    public static function getRoles()
    {
        return self::pluck('name', 'id');
    }

   /**
    * The function "users" returns a collection of User objects associated with the current object.
    * 
    * @return a collection of User models.
    */
    public function users()
    {
        return $this->hasMany(User::class);
    }



}

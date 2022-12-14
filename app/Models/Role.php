<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public const SUPER_VISOR_ID = 1;
    public const CLERK_ID = 2;
    
    protected $guarded = [];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

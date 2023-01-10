<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerLog extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

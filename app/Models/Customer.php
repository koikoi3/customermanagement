<?php

namespace App\Models;

use App\Events\KramerInComming;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    const KRAMER_FLAG_ON = 1;
    
    use HasFactory;
    protected $guarded = [];
    
    protected $dispatchesEvents = [
        'created' => \App\Events\KramerInComming::class,
    ];
    
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    
    public function customerLogs()
    {
        return $this->hasMany(CustomerLog::class);
    }
    
    public function isKramer(): bool
    {
        return $this->kramer_flag == Customer::KRAMER_FLAG_ON;
    }
}

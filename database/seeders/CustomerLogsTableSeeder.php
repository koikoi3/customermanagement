<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerLogsTableSeeder extends Seeder
{
    use HasFactory;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CustomerLog::factory()->count(120)->create();
    }
}

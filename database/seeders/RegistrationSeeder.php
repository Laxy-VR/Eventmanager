<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        registration::factory()->create([
            'event_id' => '2',
            'user_name' => 'Mike',
            'email' => 'Mike@gmail.com',
            
        ]);
    }
}

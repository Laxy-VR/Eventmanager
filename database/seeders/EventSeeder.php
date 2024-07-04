<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'name' => 'Defcon.1',
            'description' => 'Defqon.1 2024 Power of the Tribe will take place on the 27th, 28th, 29th and 30th of July 2024. 
Head over to the Defqon.1 website for more info and tickets Defqon1.com.',
            'location' => 'Spijkweg 30, 8256 RJ Biddinghuizen',
            'date' => '2024-07-27'
        ]);

        DB::table('events')->insert([
            'name' => 'Tomorrowland',
            'description' => 'Tomorrowland and Dimitri Vegas & Like Mike ignite a wave of excitement with the announcement of an early season on the enchanting island of Ibiza, Spain. 
            This summer, the legendary Tomorrowland presents Dimitri Vegas and Like Mike concerts will be back again at Ushuaïa, with the season kicking off on May 15th through October 2nd, 2024.',
            'location' => 'Ibiza (España), Ushuaïa',
            'date' => '2024-07-03'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynastiesTableSeeder extends Seeder
{
    public function generateRandomDynasties() {
        $positions = ['秦', '漢', '蜀漢', '魏', '吳', '晉', '楚', '五胡十六國', '南北朝'];
        return $positions[rand(0, count($positions)-1)];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++)
        {
            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => $Dynasties,
                'dynasty_start_year' => rand(-221,420),
                'dynasty_end_year' => rand(-207,589),
            ]);   
        }
        
    }
}

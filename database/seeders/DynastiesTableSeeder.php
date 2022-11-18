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
        for ($i=0; $i<1; $i++)
        {
            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "秦",
                'dynasty_start_year' => -221,
                'dynasty_end_year' => 207,
            ]);   

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "漢",
                'dynasty_start_year' => -202,
                'dynasty_end_year' => 220,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "蜀漢",
                'dynasty_start_year' => -221,
                'dynasty_end_year' => 263,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "魏",
                'dynasty_start_year' => 220,
                'dynasty_end_year' => 266,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "吳",
                'dynasty_start_year' => 229,
                'dynasty_end_year' => 280,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "晉",
                'dynasty_start_year' => 266,
                'dynasty_end_year' => 420,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "楚",
                'dynasty_start_year' => 403,
                'dynasty_end_year' => 404,
            ]);   

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "五胡十六國",
                'dynasty_start_year' => 304,
                'dynasty_end_year' => 439,
            ]);    

            $Dynasties=$this->generateRandomDynasties();
            DB::table('dynasties')->insert([
                'dynasty_name' => "南北朝",
                'dynasty_start_year' => 420,
                'dynasty_end_year' => 589,
            ]);    
        }


















        
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class brandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['GAP', 'ZARA', 'JILLSTUART', 'ユニクロ', 'H&M'];
        $now = Carbon::now();
        foreach( $brands as $brand ){
            DB::table('brands')->insert([
                'brand_name' => $brand, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

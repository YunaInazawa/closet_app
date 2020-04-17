<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class cotegoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cotegories = ['トップス', 'ボトムス', 'ワンピース', 'アウター', '靴', 'アクセサリー'];
        $now = Carbon::now();
        foreach( $cotegories as $cotegory ){
            DB::table('cotegories')->insert([
                'cotegory_name' => $cotegory, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

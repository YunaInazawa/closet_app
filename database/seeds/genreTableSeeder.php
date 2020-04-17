<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class genreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = 
        [
            'Ｔシャツ', 'Ｙシャツ', 'ブラウス', 'タンクトップ', 'カーディガン', 'ニット', 'パーカー', 
            'パンツ', 'スカート', 
            'ワンピース', 
            'ジャケット', 'コート',
            'スニーカー', 'ブーツ', 'サンダル', 
            '帽子', 'ネックレス'
        ];
        $categories = 
        [
            'トップス', 'トップス', 'トップス', 'トップス', 'トップス', 'トップス', 'トップス', 
            'ボトムス', 'ボトムス', 
            'ワンピース', 
            'アウター', 'アウター', 
            '靴', '靴', '靴', 
            'アクセサリー', 'アクセサリー'
        ];
        $now = Carbon::now();
        for( $i = 0; $i < count($genres); $i++ ){
            $cotegory = DB::table('cotegories')->where('cotegory_name', $categories[$i])->first();
            DB::table('genres')->insert([
                'genre_name' => $genres[$i], 
                'cotegory_id' => $cotegory->id, 
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'name' => '胸',
            // 'event' => 'ベンチプレス',
            // 'event' => 'インクラインダンベルプレス',
            // 'event' => 'ダンベルフライ',
        ],
        [
            'name' => '背中',
            // 'event' => 'ラットプルダウン',
        ],
        [
            'name' => '脚',
            // 'event' => 'スクワット',
        ],
        [
            'name' => '肩',
        //     'event' => 'ダンベルショルダープレス',
        //     'event' => 'サイドレイズ',
        //     'event' => 'リアレイズ',
        ],
        [
            'name' => '腕(上腕二頭筋)',
            // 'event' => 'バーベルカール',
        ],
        [
            'name' => '腕(上腕三頭筋)',
            // 'event' => 'フレンチプレス',
        ],
        [
            'name' => '腹',
            // 'event' => 'アブローラー',
        ],
        [
            'name' => 'その他',
            // 'event' => '',
        ]];
        DB::table('categories')->insert($param);
    }
}

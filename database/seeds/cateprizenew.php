<?php

use Illuminate\Database\Seeder;

class cateprizenew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_prize_new')->delete();
        DB::table('cate_prize_new')->insert([
            ['id'=>1,
            'image'=>'gioithieu8.png',
            'note'=>'Sáng kiến giáo dục 2008',
            ],

           ['id'=>2,
            'image'=>'gioithieu7.png',
            'note'=>'Ngày sáng tạo An toàn giao thông'
            ],

            ['id'=>3,
            'image'=>'gioithieu6.png',
            'note'=>'Sáng tạo vì trẻ em và thanh thiếu niên khó khăn'
            ],
                
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class cateprize extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_prize')->delete();
        DB::table('cate_prize')->insert([
            ['id'=>1,
            'image'=>'gioithieu4.png',
            'note'=>'Ông Nguyễn Thiện Nhân - Bộ trưởng bộ GD&ĐT
            cùng lãnh đạo Đảng và nhà nước trong đêm trao giải
            Nhân Tài Đất Việt 2007',
            'prize_id'=>1],
           ['id'=>2,
            'image'=>'gioithieu5.png',
            'note'=>'Ông Trương Tấn Sang - Ủy viên Bộ Chính trị - Bí thư Trung ương Đảng trao giải Nhất cho nhóm giải Nhất Nhân tài Đất Việt',
            'prize_id'=>1]
        ]);
    }
}

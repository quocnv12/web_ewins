<?php

use Illuminate\Database\Seeder;

class prize extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prize')->delete();
        DB::table('prize')->insert([
            ['id'=>1,'title'=>'Giải nhất Nhân tài Đất Việt năm 2007',
            'content'=>'Tới dự lễ trao giải thưởng và tôn vinh nhân tài đất Việt trong lĩnh vực CNTT-TT 2007 có Ủy viên Bộ Chính trị - Bí thư Trung ương Đảng Trương Tấn Sang, Phó Thủ tướng - Bộ tưởng Bộ GD-ĐT Nguyễn Thiện Nhân, Bộ trưởng bộ Thông tin - Truyền thông Lê Doãn Hợp, Bộ trưởng Bộ Y tế Nguyễn Quốc Triệu, Bộ trưởng Chủ nhiệm Ủy ban Dân tộc Giảng Seo Phử, đại diện Hội Khuyến học Việt Nam…',
           ],
            

                   
        ]);
    }
}



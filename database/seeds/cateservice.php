<?php

use Illuminate\Database\Seeder;

class cateservice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_service')->delete();
        DB::table('cate_service')->insert([
            ['id'=>1,'name'=>'Kiểm tra trực tuyến','slug'=>'Kiem-tra-truc-tuyen'],
            ['id'=>2,'name'=>'Xây dựng khóa học trực tuyến','slug'=>'Xay-dung-khoa-hoc-truc-tuyen'],
            ['id'=>3,'name'=>'Giới thiệu dịch vụ xây dựng trung tâm đào tạo trực tuyến','slug'=>'Gioi-thieu-dich-vu-xay-dung-trung-tam-dao-tao-truc-tuyen'],
            ['id'=>4,'name'=>'Đào tạo chuyên sâu','slug'=>'Dao-tao-chuyen-sau'],           
        ]);
    }
}

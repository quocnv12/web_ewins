<?php

use Illuminate\Database\Seeder;

class catenew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cate_new')->delete();
        DB::table('cate_new')->insert([
            ['id'=>1,'name'=>'Nhân sự','slug'=>'nhan-su'],
            ['id'=>2,'name'=>'Đào tạo phát triển','slug'=>'dao-tao-phat-trien'],
            ['id'=>3,'name'=>'Doanh nghiệp','slug'=>'doanh-nghiep'],
                   
        ]);
    }
}

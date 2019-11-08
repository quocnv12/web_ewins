<?php

use Illuminate\Database\Seeder;

class elearning extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_learning')->delete();
        DB::table('e_learning')->insert([
            ['id'=>1,'title'=>'Xác định nhu cầu đào tạo','icon'=>'ic1.png','status'=>1],
            ['id'=>2,'title'=>'Lập và quản lý kế hoạch đào tạo','icon'=>'ic2.png','status'=>1],
            ['id'=>3,'title'=>'Học tập','icon'=>'ic3.png','status'=>1],
            ['id'=>4,'title'=>'Thi - Kiểm tra','icon'=>'ic4.png','status'=>1],
            ['id'=>5,'title'=>'Học, thi trên Mobile','icon'=>'ic5.png','status'=>1],
            ['id'=>6,'title'=>'Thư viện','icon'=>'ic6.png','status'=>1],
            ['id'=>7,'title'=>'Giảng dạy trực tuyến Realtime','icon'=>'ic7.png','status'=>1],
            ['id'=>8,'title'=>'Quản trị, báo cáo','icon'=>'ic8.png','status'=>1],
            ['id'=>9,'title'=>'Đánh giá sau đào tạo','icon'=>'ic9.png','status'=>1],
      
        ]);
    }
}

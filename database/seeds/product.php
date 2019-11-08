<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        DB::table('product')->insert([
            ['id'=>1,'name'=>'Dịch vụ Thiết kế website','link'=>'Web88.vn','slug'=>'Dich-vu-thiet-ke-website'],
            ['id'=>2,'name'=>'Website tuyển dung việc làm','link'=>'Ytalent.vn','slug'=>'Website-tuyen-dung-viec-lam'],
            ['id'=>3,'name'=>'Website việc làm và khởi nghiệp cho Sinh Viên','link'=>'Topcarreer.co/TotalJobs.vn/Timviecngay.vn','slug'=>'Website-viec-lam-va-khoi-nghiep-cho-sinh-vien'],
            ['id'=>4,'name'=>'Website Tuyển Dụng Việc Làm IT DevJob','link'=>'Web88.vn','slug'=>'Website-tuyen-dung-viec-lam-IT-devjob'],
            

                   
        ]);
    }
}

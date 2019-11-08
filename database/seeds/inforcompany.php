<?php

use Illuminate\Database\Seeder;

class inforcompany extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infor_company')->delete();
        DB::table('infor_company')->insert([
            ['id'=>1,'name'=>'Công ty Công nghệ và Dịch vụ Talent Wins','address'=>'Tòa CT2, khu đô thị Thái Hà Constrexim, 43 Phạm Văn Đồng, Hà Nội','masothue'=>'0108134425','phone'=>'0927151535','email'=>'contact@talentwins.co'],      
        ]);
    }
}

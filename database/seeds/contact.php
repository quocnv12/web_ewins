<?php

use Illuminate\Database\Seeder;

class contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert([
            ['id'=>1,'name'=>'Nguyễn Văn Nam','email'=>'nguyenvannam@gmail.com','phone'=>'0963158338','name_city'=>'Công ty TNHH Hải Hà','address_city'=>'Ngô sỹ Liên - Vạn Phúc - Hà Đông - Hà Nội','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','status'=>1],
            ['id'=>2,'name'=>'Nguyễn Thị Hà','email'=>'nguyenthiha@gmail.com','phone'=>'0342085066','name_city'=>'Công ty Nam Á','address_city'=>'Trần Hưng Đạo - Hoàn Kiếm Hà Nội','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','status'=>1],
            ['id'=>3,'name'=>'Nguyễn Bảo Ngọc','email'=>'nguyenbaongoc@gmail.com','phone'=>'0978233574','name_city'=>'Công ty xuất khẩu lao động','address_city'=>'Phạm Hùng - Nam Từ Liêm - Hà Nội','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','status'=>0],
                 
        ]);
    }
}

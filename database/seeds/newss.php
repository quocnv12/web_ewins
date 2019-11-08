<?php

use Illuminate\Database\Seeder;

class newss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new')->delete();
        DB::table('new')->insert([
            ['id'=>1,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_1.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai','status'=>'1','id_admin'=>'1','cate_new'=>'1'],
            ['id'=>2,'title'=>'Bóng đá Trung Quốc sa sút vì những điều luật lạ đời','summary'=>'Bóng đá Trung Quốc sa sút vì những điều luật lạ đời','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_2.jpg','slug'=>'Bong-da-trung-quoc-sa-sut-vi-nhung-dieu-luat-la-doi','status'=>'1','id_admin'=>'1','cate_new'=>'2'],
            ['id'=>3,'title'=>' Sơn Tùng M-TP mặc suit như quý ông, Isaac diện đồ đơn giản ở Hội An','summary'=>' Sơn Tùng M-TP mặc suit như quý ông, Isaac diện đồ đơn giản ở Hội An ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_3.jpg','slug'=>'SOn-Tung-MTP-mac-suit-nhu-quy-ong','status'=>'1','id_admin'=>'2','cate_new'=>'3'],
            ['id'=>4,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái 123','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_3.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai-123','status'=>'1','id_admin'=>'3','cate_new'=>'3'],
            ['id'=>5,'title'=>'Soobin Hoàng Sơn chia tay bạn gái','summary'=>'Soobin Hoàng Sơn chia tay bạn gái 1234','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','image'=>'img_1.jpg','slug'=>'Soobin-Hoang-Son-chia-tay-ban-gai-1234','status'=>'1','id_admin'=>'1','cate_new'=>'1'],
                    
        ]);
    }
}

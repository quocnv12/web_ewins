<?php

use Illuminate\Database\Seeder;

class support extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support')->delete();
        DB::table('support')->insert([
            ['id'=>1,'title'=>'Dịch vụ SEO từ khóa website giá rẻ','summary'=>'Dịch vụ SEO từ khóa website giá rẻ','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','slug'=>'https://mdweb.vn/dich-vu-seo-chuyen-nghiep/?gclid=CjwKCAjw8NfrBRA7EiwAfiVJpScpFkm8AbUehmBoQEk_zg99I98Mqm5InutnAzLcJO7-royks9W3hxoCA4kQAvD_BwE','link'=>'','status'=>'1'],
            ['id'=>2,'title'=>'Quảng cáo Google Adwords','summary'=>'Quảng cáo Google Adwords','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','slug'=>'Quang-cao-Google-Adwords','link'=>'https://ads.google.com/intl/vi_vn/home/','status'=>'1'],
            ['id'=>3,'title'=>'Thiết kế web tin tức, báo chí online','summary'=>'Thiết kế web tin tức, báo chí online','content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.','slug'=>'Thiet-ke-web-tin-tuc-bao-chi-online','link'=>'https://vietwebgroup.vn/','status'=>'1'],
                    
        ]);
    }
}

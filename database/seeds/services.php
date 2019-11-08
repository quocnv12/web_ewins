<?php

use Illuminate\Database\Seeder;

class services extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->delete();
        DB::table('service')->insert([
            ['id'=>1,'name'=>'Kiểm tra trực tuyến','summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','slug'=>'Kiem-tra-truc-tuyen','status'=>1,'cate_id'=>1,'image'=>'omt-logo-final1-409x230.jpg'],
            ['id'=>2,'name'=>'Xây dựng khóa học trực tuyến','summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','slug'=>'Xay-dung-khoa-hoc-truc-tuyen','status'=>1,'cate_id'=>2,'image'=>'omt-logo-final1-409x230.jpg'],
            ['id'=>3,'name'=>'Giới thiệu dịch vụ xây dựng trung tâm đào tạo trực tuyến','summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','slug'=>'Gioi-thieu-dich-vu-xay-dung-trung-tam-dao-tao-truc-tuyen','status'=>1,'cate_id'=>3,'image'=>'omt-logo-final1-409x230.jpg'],
            ['id'=>4,'name'=>'Kiểm tra trực tuyến','summary'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','content'=>'Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh','slug'=>'Kiem-tra-truc-tuyen','status'=>1,'cate_id'=>4,'image'=>'omt-logo-final1-409x230.jpg'],
        ]);
    }
}

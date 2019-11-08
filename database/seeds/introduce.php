<?php

use Illuminate\Database\Seeder;

class introduce extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('introduce')->delete();
        DB::table('introduce')->insert([
            ['id'=>1,

            'title'=>'Welcome To Elearning',
            'content'=>'Công ty CP ĐTPT Công nghệ E-LEARNING TALENT WINS ra đời với mục tiêu chính và lâu dài là tập trung vào phát triển các giải pháp CNTT&TT chất lượng cao phục vụ khách hàng và triển khai các dịch vụ trực tuyến phục vụ quốc gia và cộng đồng.


            Ban lãnh đạo công ty là những thành viên nòng cốt trong nhóm đạt giải nhất cuộc thi Nhân Tài Đất t 2007 với giải pháp "Học và thi trực tuyến ứng dụng nâng cao chất lượng đào tạo" do Bộ GD&ĐT, Bộ KH&CN, Bộ TT&TT đồng tổ chức.',
            'sammary'=>'E-learning là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học trực tuyến hay giáo dục trực tuyến. E-learning là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/ ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ (LAN).',
            'slug'=>'Công-ty-Talent-Wins',
            'image'=>'gioithieu1.png',
            'video'=>'https://www.youtube.com/embed/YjyNxGa0ThI',
            'nams'=>'10',
            'thanhlap'=>'Thành Lập',
            'phantram'=>'100',
            'noidungphantram'=>'Tăng trưởng năm 2018',
            'doitac'=>'100',
            'noidungdoitac'=>'Trong nước và quốc tế',
            'nhanvien'=>'100',
            'noidungnhanvien'=>'Năng động ,sáng tạo ,trách nhiệm'  
            
                ],   
        ]);
    }
}

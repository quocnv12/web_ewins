<?php

use Illuminate\Database\Seeder;

class subelearning extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sub_e_learning')->delete();
        DB::table('sub_e_learning')->insert([
            ['id'=>1,'cate_id'=>1,'name'=>'Khảo sát nhu cầu đào tạo'],
            ['id'=>2,'cate_id'=>1,'name'=>'Thi, kiểm tra đánh giá xác định năng lực, sự thiếu hụt kiến thức kỹ năng'],
            
            ['id'=>3,'cate_id'=>2,'name'=>'Lập kế hoạch đào tạo '],
            ['id'=>4,'cate_id'=>2,'name'=>'Quản lý kế hoạch đào tạo '],
            ['id'=>5,'cate_id'=>2,'name'=>'LQuản lý các chương trình đào tạo '],

            ['id'=>6,'cate_id'=>3,'name'=>'Đào tạo theo chức danh, kế hoạch, mục tiêu cá nhân  '],
            ['id'=>7,'cate_id'=>3,'name'=>'Đánh giá trong đào tạo: đánh giá học viên; đánh giá giảng viên; đánh giá tổ chức khóa học... '],
            ['id'=>8,'cate_id'=>3,'name'=>'Quản lý chi phí đào tạo'],
            ['id'=>9,'cate_id'=>3,'name'=>'Quản lý khóa học'],

            ['id'=>10,'cate_id'=>4,'name'=>'Tổ chức thi: Thi chính thức; thi thử; thi ôn luyện '],
            ['id'=>11,'cate_id'=>4,'name'=>'Thi và giám sát thi '],
            ['id'=>12,'cate_id'=>4,'name'=>'Chấm thi và lên điểm '],
            ['id'=>13,'cate_id'=>4,'name'=>'Khiếu nại và giải quyết khiếu nại '],
            ['id'=>14,'cate_id'=>4,'name'=>'Quản lý chi phí thi'],
            ['id'=>15,'cate_id'=>4,'name'=>'Quản lý ngân hàng câu hỏi '],
            ['id'=>16,'cate_id'=>4,'name'=>'Quản lý ngân hàng đề thi'],

            ['id'=>17,'cate_id'=>5,'name'=>'Học theo chức danh, kế hoạch, mục tiêu cá nhân '],
            ['id'=>18,'cate_id'=>5,'name'=>'Thi chính thức; thi thử; thi ôn luyện'],
            ['id'=>19,'cate_id'=>5,'name'=>'Xem và tham khỏa thư viện '],
            ['id'=>20,'cate_id'=>5,'name'=>'Học khóa học realtime'],

            ['id'=>21,'cate_id'=>6,'name'=>'Thư viện bài giảng '],
            ['id'=>22,'cate_id'=>6,'name'=>'Thư viện tài liệu '],
            ['id'=>23,'cate_id'=>6,'name'=>'Thư viện chương trình đào tạo'],
            ['id'=>24,'cate_id'=>6,'name'=>'Quản lý chức danh '],
            ['id'=>25,'cate_id'=>6,'name'=>'Quản lý khung kiến thức '],
            ['id'=>26,'cate_id'=>6,'name'=>'Quản lý khung năng lực'],

            ['id'=>27,'cate_id'=>7,'name'=>'Quản lý lịch dạy trực tuyến '],
            ['id'=>28,'cate_id'=>7,'name'=>'Thiết lập các đối tượng tham dự; thông báo tới các đối tượng quá SMS, Email... '],
            ['id'=>29,'cate_id'=>7,'name'=>'Chuẩn bị tài nguyên cho buổi dạy trực tuyến '],
            ['id'=>30,'cate_id'=>7,'name'=>'Dạy học trực tuyến bằng webcam, micro, bảng trắng, chia sẻ màn hình... '],
            ['id'=>31,'cate_id'=>7,'name'=>'Ghi và xem lại lịch dạy trực tuyến'],

            ['id'=>32,'cate_id'=>8,'name'=>'Quản lý người dùng '],
            ['id'=>33,'cate_id'=>8,'name'=>'Quản lý cơ cấu, tổ chức, nhóm người dùng '],
            ['id'=>34,'cate_id'=>8,'name'=>'Phân quyền hệ thống'],
            ['id'=>35,'cate_id'=>8,'name'=>'Giám sát hệ thống'],
            ['id'=>36,'cate_id'=>8,'name'=>'Báo cáo thống kê '],
            ['id'=>37,'cate_id'=>8,'name'=>'Theo dõi đánh giá M & E và phân tích dự báo ra quyết định'],


            ['id'=>38,'cate_id'=>9,'name'=>'Học viên tự đánh giá nhận xét'],
            ['id'=>39,'cate_id'=>9,'name'=>'Người quản lý trực tiếp nhận xét đánh giá '],
            ['id'=>40,'cate_id'=>9,'name'=>'Chuẩn bị tài nguyên cho buổi dạy trực tuyến'],
            ['id'=>41,'cate_id'=>9,'name'=>'Giảng viên đánh giá '],
            ['id'=>42,'cate_id'=>9,'name'=>'Lãnh đạo đánh giá'],




        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class sub_talentwins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_talentwins')->delete();
        DB::table('sub_talentwins')->insert([
            [
                'id'=>1,
                'title'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt với nhất',
                'summary'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp...',
                'content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.',
                'image'=>'thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg',
                'slug'=>'Bai-hoc-kinh-doanh-sau-sac-rut-ra-tu-cuon-sach-duoc-ca-Bill-Gates-va-Warren-Buffett-khen-la-tuyet-voi-nhat',
                'status'=>'1',
                'id_admin'=>'1',
                'cate_id'=>'1'
            ],
            [
                'id'=>2,
                'title'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt với nhất',
                'summary'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp...',
                'content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.',
                'image'=>'thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg',
                'slug'=>'Bai-hoc-kinh-doanh-sau-sac-rut-ra-tu-cuon-sach-duoc-ca-Bill-Gates-va-Warren-Buffett-khen-la-tuyet-voi-nhat-1',
                'status'=>'1',
                'id_admin'=>'1',
                'cate_id'=>'2'
            ],
            [
                'id'=>3,
                'title'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt với nhất',
                'summary'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp...',
                'content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.',
                'image'=>'thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg',
                'slug'=>'Bai-hoc-kinh-doanh-sau-sac-rut-ra-tu-cuon-sach-duoc-ca-Bill-Gates-va-Warren-Buffett-khen-la-tuyet-voi-nhat-2',
                'status'=>'1',
                'id_admin'=>'1',
                'cate_id'=>'3'
            ],
            [
                'id'=>4,
                'title'=>'Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren Buffett khen là tuyệt với nhất',
                'summary'=>'E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp...',
                'content'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.',
                'image'=>'thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg',
                'slug'=>'Bai-hoc-kinh-doanh-sau-sac-rut-ra-tu-cuon-sach-duoc-ca-Bill-Gates-va-Warren-Buffett-khen-la-tuyet-voi-nhat-3',
                'status'=>'1',
                'id_admin'=>'1',
                'cate_id'=>'3'
            ]
                    
        ]);
    }
}

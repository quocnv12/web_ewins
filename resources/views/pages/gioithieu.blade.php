
@extends('master-layout')

@section('content')
  <main>
    <div class="vetrinam">
      <div class="container">

        <!-- top content -->
        <div class="tt">
          @foreach ($introduce as $item)

           {{$item->title}}
        </div>
        <div class="sp">
          <!---->
        </div>

        <!-- noi dung -->
        <div id="nd">
          <div class="row">
            <div class="col-md-6"  >
              <p data-aos="fade-up">
               {{$item->content}}
              </p><br />
              {{-- <p data-aos="fade-up">
                Ban lãnh đạo công ty là những thành viên nòng cốt trong nhóm đạt giải nhất cuộc thi Nhân Tài Đất
                t 2007 với giải pháp "Học và thi trực tuyến ứng dụng nâng cao chất lượng đào tạo" do Bộ GD&ĐT, Bộ
                KH&CN, Bộ TT&TT đồng tổ chức.
              </p><br /> --}}

              <!-- lich su -->
              <div class="thanhlap" data-aos="fade-up" data-aos-delay="100">
                <div class="nam">{{ $item->nams }} năm</div>
                <strong>{{ $item->thanhlap }}</strong>
              </div>
              <div class="thanhlap" class="tt" data-aos="fade-up" data-aos-delay="100">
                <div class="nam"> {{ $item->phantram }}<span class="more" style="top: -0.5em; position: relative; font-size: 25px;">+</span> % </div>
                <strong>{{ $item->noidungphantram }}</strong>
              </div>
              <br />
              <div class="thanhlap" data-aos="fade-up" data-aos-delay="200">
                <div class="nam"> {{ $item->doitac }}<span class="more" style="top: -0.5em; position: relative; font-size: 25px;">+</span> Đối tác </div>
                <strong>{{ $item->noidungdoitac }}</strong>
              </div>
              <div class="thanhlap" data-aos="fade-up" data-aos-delay="200">
                <div class="nam"> {{ $item->nhanvien }}<span class="more" style="top: -0.5em; position: relative; font-size: 25px;">+</span> Nhân viên </div>
                <strong>{{ $item->noidungnhanvien }}</strong>
              </div>
            </div>

            <!-- column right -->
            <div class="col-md-6" style="text-align: center" data-aos="fade-up" data-aos-delay="200">
              <img src="../public/images/gioithieu1.png" alt="">
            </div>
          </div>

          @endforeach
        </div>
        <br /><br />
      </div>

      <!-- giai thuong -->
      <div class="giaithuong">
        <div class="container content">
          <div class="tt" data-aos="fade-up" data-aos-delay="100">
            Giải thưởng
          </div>
          @foreach ($prize as $row)
              
         
          <div class="tt1" data-aos="fade-up" data-aos-delay="200">
            {{ $row->title }}
          </div>
          <div class="row">
            <div class="col-sm-12 cc" data-aos="fade-up" data-aos-delay="300">
              {{ $row->content }}
            </div>
            <br/>
            @foreach ($cateprize as $item)
              @if ($row->id==$item->prize_id)
                <div class="col-sm-6 cc1" data-aos="fade-up" data-aos-delay="400"> 
                    <img src="../public/images/{{ $item->image }}">
                    <div class="cm">{{ $item->note }}</div>
                  </div>
              @endif 
            @endforeach
            
             
            {{-- <div class="col-sm-6 cc1">
              <img src="http://trinam.com.vn/images/trinam/gioithieu5.png" data-aos="fade-up" data-aos-delay="500">
              <div class="cm">Ông Trương Tấn Sang - Ủy viên Bộ Chính trị - Bí thư Trung ương Đảng <br>trao giải Nhất cho nhóm giải Nhất Nhân tài Đất Việt</div>
            </div> --}}
          </div>
          <br/>
          @endforeach
          <div class="tt1" data-aos="fade-up" >
            Các giải thưởng khác
          </div>
          <br/>
         
          <div class="row">
              @foreach ($cateprizenew as $item)
                <div class="col-sm-4 col-xs-4 cc1" data-aos="fade-up" data-aos-delay="100">
                  <img src="../public/images/{{ $item->image }}"  height="280">
                  <div class="cm">{{ $item->note }}</div>
                </div>
            @endforeach
            {{-- <div class="col-sm-4 col-xs-4 cc1" data-aos="fade-up" data-aos-delay="200">
              <img src="http://trinam.com.vn/images/trinam/gioithieu7.png" height="280">
              <div class="cm">Ngày sáng tạo An toàn giao thông</div>
            </div>
            <div class="col-sm-4 col-xs-4 cc1" data-aos="fade-up" data-aos-delay="300">
              <img src="http://trinam.com.vn/images/trinam/gioithieu6.png" height="280">
              <div class="cm">Sáng tạo vì trẻ em và thanh thiếu niên khó khăn</div>
            </div> --}}
            
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>

@endsection
@extends('master-layout')
@section('content')
<main>

  <!-- top content -->
  <div class="row" style="padding-top:100px">
    <div class="col-12">
    <div class="tt-1">
                  THÔNG TIN LIÊN HỆ
                </div>
                <div class="sp-1"></div>
                </div>
    </div>
  </div>
  <!-- bann do -->
  <div class="content-main mt-5">
    <div class="container">
      <div class="contact ">
        <div class="row">
        
          <div class="col-sm-6" style="background-color: #F0FFF0; border-radius: 50px">
            <form  style="padding: 10px 20px" method="POST" action="{{route('contact.add')}}">
            @csrf
            <h6 class="text-center mt-3" style="color:green">Anh Chị vui lòng để lại thông tin liên hệ</h6>
            <h6 class="text-center" style="color:green">để được eWins tư vấn, hỗ trợ</h6>

            <div class="form-group mb-0">
                <label for="email" class="text-ct">Tên Công ty</label>
                <input type="text" class="form-control " id="email" placeholder="Nhập tên Công ty..." name="name_city">
                <p style="color:red">{{ $errors->first('name_city') }}</p>
              </div>
              <div class="form-group mb-0">
                <label for="email" class="text-ct">Họ tên</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập họ và tên..." name="name">
                <p style="color:red">{{ $errors->first('name') }}</p>
              </div>
              <div class="form-group mb-0">
                <label for="email" class="text-ct">Địa chỉ Công ty</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập địa chỉ Công ty..." name="address_city">
                <p style="color:red">{{ $errors->first('address_city') }}</p>
              </div>
              <div class="form-group mb-0">
                <label for="email" class="text-ct">Số điện thoại</label>
                <input type="text" class="form-control d-right" id="email" placeholder="Nhập số điện thoại" name="phone">
                <p style="color:red">{{ $errors->first('phone') }}</p>
              </div>
              <div class="form-group mb-0">
                <label for="email" class="text-ct">Email</label>
                <input type="email" class="form-control d-right" id="email" placeholder="Nhập địa chỉ email..." name="email">
                <p style="color:red">{{ $errors->first('email') }}</p>
              </div>
              <div class="form-group">
                <label for="comment" class="text-ct">Nội dung</label>
                <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung" name="content"></textarea>
                <p style="color:red">{{ $errors->first('content') }}</p>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                </label>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Gửi</button>
            </form>
          </div>

          <div class="col-sm-6 pl-4 pb-4" style="background-color: #F0FFF0; border-radius: 50px">
            <!-- <h3 class="contact__company-title">Liên hệ</h3> -->

            <h6 class="contact__company-name mt-2 text-center" style="padding: 10px 20px;color:green">Công ty Công nghệ và Dịch vụ Talent Wins</h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4197783156555!2d105.7762418144078!3d21.055889892228645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455531af09891%3A0xd08dfc58f21b1858!2sThai+Ha+Constrexim+Building%2C!5e0!3m2!1svi!2s!4v1564668452400!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contact__box"style="padding: 10px 20px">
              <p class="contact__box-location">
                <i class="fas fa-map-marker-alt fa-fw" aria-hidden="true"></i>
                <span>Tòa nhà CT2, khu đô thị Constrexim Thái Hà, Phạm Văn Đồng, Hà Nội</span>
              </p>
              <p>
                <i class="fas fa-phone-alt fa-fw" aria-hidden="true"></i>
                <span>0919 756 006</span>
              </p>
              <p>
                <i class="fas fa-envelope fa-fw" aria-hidden="true"></i>
                <a href=""><span>contact@talentwins.co</span></a>
              </p>
            </div>


          </div>
        </div>
      </div>


    </div>

  </div>
</main>

@endsection
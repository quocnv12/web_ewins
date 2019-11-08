@extends('master-layout')
@section('content')




<div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">

    @foreach ($banner as $row)


    <div class="site-blocks-cover overlay" style="background-image: url(images/{{ $row->image }})" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">



                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h1 style="color: #088A08 ">{{ $row->title }}</h1>
                            <p class="mb-5">{{ $row->content }}</p>
                            <div>
                                <a href="{{ $row->link }}" class="btn btn-primary mr-2 mb-2">Get Stated</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endforeach



</div>


<div class="site-section" id="about-section">
    <div class="container">
        @foreach ($introduce as $item)
        <div class="row align-items-lg-center">
            <div class="col-md-6 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="100">
                <iframe width="100%" height="315" src="{{ $item->video }}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <!-- <div class="experience">
              <span class="year">50 years</span>
              <span class="caption">of experience</span>
            </div> -->
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="300">
              
                  
            
                <h2 class="section-title mb-3">{{ $item->title }}</h2>
                <p class="mb-4">{{ $item->sammary }}</p>
                <p><a href="gioithieu" class="btn btn-primary " style="font-size: 18px">Đọc tiếp</a></p>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ban cố vấn -->
<section class="site-section border-bottom" id="team-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                <!-- <h3 class="section-sub-title">Team</h3> -->
                <h3 class="section-title mb-3" style="font-size: 30px">BAN CỐ VẤN</h3>
            </div>

            <div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        @foreach($adviser as $value)
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                            <div class="person text-center">
                                <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image"
                                    class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                                <h3>{{$value->name}}</h3>
                                <p class="position text-muted">{{$value->position}}</p>
                                <p class="mb-4">{{$value->information}}</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach($adviser as $value)
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <div class="person text-center">
                                <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image"
                                    class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                                <h3>{{$value->name}}</h3>
                                <p class="position text-muted">{{$value->position}}</p>
                                <p class="mb-4">{{$value->information}}</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach($adviser as $value)
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                            <div class="person text-center">
                                <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image"
                                    class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                                <h3>{{$value->name}}</h3>
                                <p class="position text-muted">{{$value->position}}</p>
                                <p class="mb-4">{{$value->information}}</p>
                                <ul class="ul-social-circle">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>


            </div>




        </div>
</section>





<!-- giải pháp e-learning -->

<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">GIẢI PHÁP ĐÀO TẠO E-LEARNING</h2>
            </div>
        </div>
        <div class="row align-items-stretch">

            @foreach ($elearnings as $row)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><img
                            src="http://trinam.com.vn/images/trinam/giaiphap/{{ $row->icon }}" alt="">
                    </div>
                    <div>
                        <h3>{{ $row->id }}. {{ $row->title }}</h3>

                        @foreach ($subelearnings as $item)
                        @if($row->id==$item->cate_id)
                        <span><i class="fas fa-check" style="color:#61c357"></i> {{ $item->name }}</span>
                        <br>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>







<!-- tin tức -->

<section class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">TIN TỨC</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">

        <div class="container">
            <div class="row">
                @foreach($new1 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{$value->title}}</a></h2>
                        <div class="meta mb-4">{{$value->name}} <span class="mx-2">&bullet;</span>
                            {{$value->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{$value->content}}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>


        <div class="container">
            <div class="row">
                @foreach($new2 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{$value->title}}</a></h2>
                        <div class="meta mb-4">{{$value->name}} <span class="mx-2">&bullet;</span>
                            {{$value->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{$value->content}}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>


        <div class="container">
            <div class="row">
                @foreach($new3 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{$value->title}}</a></h2>
                        <div class="meta mb-4">{{$value->name}} <span class="mx-2">&bullet;</span>
                            {{$value->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{$value->content}}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>

        <div class="container">
            <div class="row">
                @foreach($new4 as $value)
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">{{$value->title}}</a></h2>
                        <div class="meta mb-4">{{$value->name}} <span class="mx-2">&bullet;</span>
                            {{$value->created_at}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>{{$value->content}}</p>

                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div>
</section>










<section class="site-section ok" id="contact-section">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mt-0" style="font-size: 30px">LIÊN HỆ</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-7 mb-5 " style="background-color: #F0FFF0; border-radius: 50px">



                <form action="#" style="padding:20px">
                    <h6 class=" text-center mt-4">Anh Chị vui lòng để lại thông tin liên hệ để được eWins tư vấn, hỗ
                        trợ!</h6>
                    <div class="form-group mb-0 mt-4">
                        <label for="email" class="font-weight-bold text-ct">Tên Công ty</label>
                        <input type="text" class="form-control" id="email" placeholder="Nhập tên Công ty..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Họ tên</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Địa chỉ Công ty</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ Công ty..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Số điện thoại</label>
                        <input type="email" class="form-control d-right" id="email" placeholder="Nhập số điện thoại"
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Email</label>
                        <input type="email" class="form-control d-right" id="email" placeholder="Nhập địa chỉ email..."
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="comment" class="font-weight-bold text-ct">Nội dung</label>
                        <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung"
                            name="text"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Gửi</button>



                </form>
            </div>
            <div class="col-md-5" style="">
                @foreach ($infocompany as $item)


                <div class="p-4 mb-3 " style="padding:30px">
                    <p class="mb-4 font-weight-bold mt-4">{{ $item->name }}</p>
                    <p class="mb-0 font-weight-bold"> <i class="fas fa-map-marker-alt fa-fw"></i> Địa chỉ</p>
                    <p class="mb-4" style="color:#04B404">{{ $item->address }}</p>

                    <p class="mb-0 font-weight-bold"><i class="fa fa-phone"></i> Số Điện Thoại</p>
                    <p class="mb-0"><a href="#" style="color:#04B404"> {{ $item->phone }}</a></p>





                    <p class="mb-0 font-weight-bold icon-envelope"> Email</p>
                    <p class="mb-0"><a href="#" style="color:#04B404">{{ $item->email }}</a></p>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



@endsection

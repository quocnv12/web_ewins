@extends('master-layout')


@section('content')

<!-- ##### Trai Nghiem ##### -->
<div id="traiNghiem">
    <div class="container">

    <div class="tt-1">
                   TRẢI NGHIỆM E-LEARNING 
                </div>
                <div class="sp-1"></div>
                

        <div class="row mt-5">

            @foreach($product as $value)
            <!-- product -->
            <div class=" col-12 col-md-4">
                <div class="product">
                    <div class="image-product">
                        <a href=""><a href="{{  $value->link }}"><img src="http://huongvietgroup.com/Media/Uploads/4-CHUNG-CHI-R.png"></a></a>
                    </div>
                    <a href="">
                        <div class="title-product">{{$value->name}}</div>
                    </a>
                    <div class="btn-product text-center ">
                        <a href="{{  $value->link }}" class="btn btn-primary btn-sm mr-2 ">Dùng thử</a>
                        <a href="{{   $value->link }}" class="btn btn-primary btn-sm ">Chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {{$product->links()}}
        <!-- <div>
            <ul class="pagination justify-content-center" style="margin:20px 0"">
                            <li class=" page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div> -->


    </div>
</div>

@endsection
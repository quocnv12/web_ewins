@extends('admins.layout.master-layout')
@section('title')
    Thêm loại dịch vụ
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Thêm loại dịch vụ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Thêm loại dịch vụ</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('cate_service.list')}}" class="btn btn-primary">Danh sách</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{route('cate_service.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên loại dịch vụ (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tên loại dịch vụ" name="name"
                                   value="">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>


@stop
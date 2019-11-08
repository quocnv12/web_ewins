@extends('admins.layout.master-layout')
@section('title')
    Sửa loại dịch vụ
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa loại dịch vụ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa loại dịch vụ</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{Route('cate_service.edit',['id'=>$cate_service->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên loại dịch vụ (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề loại dịch vụ" name="name"
                                   value="{{ $cate_service->name }}">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>
                        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
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
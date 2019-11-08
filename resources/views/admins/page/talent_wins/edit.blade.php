@extends('admins.layout.master-layout')
@section('title')
    Sửa loại tin talentwins
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa loại tin talentwins
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa loại tin talentwins</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{Route('talent_wins.edit',['id'=>$talent_wins->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên loại tin talentwins (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề loại tin talentwins" name="title"
                                   value="{{ $talent_wins->title }}">
                            <p style="color:red">{{ $errors->first('title') }}</p>
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
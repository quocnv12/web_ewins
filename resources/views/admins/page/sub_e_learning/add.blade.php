@extends('admins.layout.master-layout')
@section('title')
    Thêm hạng mục e-learning
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Thêm hạng mục e-learning
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Thêm hạng mục e-learning</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('sub_e_learning.list')}}" class="btn btn-primary">Danh sách</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{route('sub_e_learning.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên hạng mục (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tên hạng mục e-learning" name="name"
                                   value="{{ old('name') }}">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>

                        <div class="form-group">
                          <label for="">Loại tin e-learning (*)</label>
                          <select class="form-control" name="cate_id" id="">
                            @foreach($e_learning as $value)
                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                          </select>
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
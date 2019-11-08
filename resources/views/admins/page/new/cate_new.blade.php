@extends('admins.layout.master-layout')
@section('title')
    Tin tức
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Tin tức
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tin tức</li>
            </ol>
        </section>
        <br>
        <div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach

                </div>

            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                {{--  <div class="col-md-3">
                    <div class="box box-solid">
                        <div class="box-header with-border">  --}}
                            {{-- Mục lục --}}
                            {{--  <h3 class="box-title">Danh mục</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{route('service.createCate')}}"><i class="fa fa-inbox"></i> Thêm thể loại
                                        tin tức
                                        <span class="label label-primary pull-right">{{$cate_service_count}}</span></a></li>
                                <li><a href="{{route('service.create')}}"><i class="fa fa-envelope-o"></i> Thêm dịch vụ
                                        <span class="label label-primary pull-right">{{$service_count}}</span></a></li>
                                </a>
                                </li>
                                <li><a href="{{route('service.index')}}"><i class="fa fa-file-text-o"></i> Danh
                                        sách</a></li>

                            </ul>
                        </div>

                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->  --}}
                    {{-- End mục luc --}}

                {{--  </div>
                <!-- /.col -->
                <div class="col-md-9">  --}}
                    <div class="box box-primary">
                        <div id="add" class="hide">
                        <h3 style="text-align: left; padding-left: 5px">Thêm thể loại</h3>
                        <form role="form" method="POST" action="{{route('cate_new.add')}}">
                            @csrf
                            <div class="box-body">

 
                                <div class="form-group">
                                    <label>Tên thể loại(*)</label>
                                    <input type="text" class="form-control" placeholder="Thể loại tin tức" name="name"
                                           value="{{ old('name') }}">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>

                            </div>
                            </form>
                            </div>
                            <div id="edit" class="hide">
                        <h3 style="text-align: left; padding-left: 5px">Sửa thể loại</h3>
                        <form role="form" method="POST" action="{{Route('cate_new.update')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thể loại(*)</label>
                                    <input id="result" type="text" class="form-control" placeholder="Thể loại tin tức" name="name"
                                           value="">
                                    <input id="cate_id" class="hide" name="cate_id" value="">
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>

                            </div>
                            </div>
                        </form>
                        </div>
                        {{-- Datatable cate --}}
                        <section class="content" style="margin-bottom: 50px">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <a class="btn btn-primary" id="btnadd">Thêm loại tin</a>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                    <th>Hành động</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cate_new as $value)
                                                    <tr class="odd gradeX" align="center">
                                                        <td>{{$value->name}}</td>

                                                        <td>

                                                            <a class="btn btn-danger"
                                                               href="{{ url('admin/cate_new/delete/'.$value->id) }}"
                                                               onclick="return confirm('Hành động sẽ xóa tin tức này! bạn có muốn tiếp tục?')">Xóa</a>
                                                            <a class="btn btn-default" id="show" onclick="edit({{$value->id}})"
                                                              ><i class="fas fa-pencil-ruler"></i>Sửa</a>
                                                            {{--  @if($value->active==1)
                                                                <a class="btn btn-info"
                                                                   href="{{ url('admin/service/setactive-cate/'.$value->id.'/0') }}"
                                                                   onclick="return confirm('Hành động sẽ ẩn Sản Phẩm này! bạn có muốn tiếp tục?')">Ẩn</a>
                                                            @else
                                                                <a class="btn btn-warning"
                                                                   href="{{ url('admin/service/setactive-cate/'.$value->id.'/1') }}"
                                                                   onclick="return confirm('Hành động sẽ hiển thị Sản Phẩm mục này! bạn có muốn tiếp tục?')">Hiển
                                                                    thị</a>

                                                            @endif  --}}
                                                    </tr>
                                                @endforeach
                                                </tbody>


                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                        {{-- EndDatatable cate --}}

                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#btnadd").click(function(){
            $("#add").attr("class","show");
        });
        $("#show").click(function(){
            $("#edit").attr("class","show");
        });
    });

      function edit(id){
          $.ajax({
            url:"edit",
            type:"post",
            dataType: "text",
            data: {
                _token : '{{ csrf_token() }}',
                'id': id,
            },
            success: function(result){
                $('#result').val(result);
                $('#cate_id').val(id);  
            }
        });  
    }  
    </script>

@endsection


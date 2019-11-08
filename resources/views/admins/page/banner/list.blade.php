@extends('admins.layout.master-layout')
@section('title')
    Banner
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Banner
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Banner</li>
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
                                        Banner
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
                   
                        {{-- Datatable cate --}}
                        <section class="content" style="margin-bottom: 50px">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <a href="admin/banner/add" class="btn btn-primary" id="btnadd">Thêm banner</a>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Tiêu Đề</th>
                                                    <th>Nội Dung</th>
                                                    <th>Link</th>
                                                    <th>Ảnh banner</th>
                                                    <th>Tình trạng</th>
                                                    <th>Hành động</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($banner as $value)
                                                    <tr class="odd gradeX" align="center">
                                                            <td>{{$value->title}}</td>
                                                            <td>
                                                                <div style="height: 80px;width:200px;overflow: auto">{{$value->content}}</div>
                                                            </td>
                                                            <td>{{$value->link}}</td>
                                                        <td><img width="100px" src="{{asset('assets/img_banner/'.$value->image)}}"></td>
                                                        <td>{{$value->status}}</td>
                                                        <td>

                                                            <a class="btn btn-danger"
                                                               href="{{ url('admin/banner/delete/'.$value->id) }}"
                                                               onclick="return confirm('Hành động sẽ xóa banner này! bạn có muốn tiếp tục?')">Xóa</a>
                                                            <a class="btn btn-default" id="show" href="admin/banner/edit/{{ $value->id }}" onclick="edit({{ $value->id }})"
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
    function showIMG() {
                    var fileInput = document.getElementById('image');
                    var filePath = fileInput.value; //lấy giá trị input theo id
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
                    //Kiểm tra định dạng
                    if (!allowedExtensions.exec(filePath)) {
                        alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
                        fileInput.value = '';
                        return false;
                    } else {
                        //Image preview
                        if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                }

       function edit(id){
                $('#id').val(id);
            }
      
    </script>

@endsection


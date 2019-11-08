@extends('admins.layout.master-layout')
@section('title')
    Giới thiệu 
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        @if (session('thongbao'))
                                            
                                                
                                                <script>
                                                    alert('{{ session('thongbao') }}')
                                                </script>
                                            
                                        @endif
                                            

                                        <th class="col-md-2">Tiêu đề</th>
                                        <th class="col-md-2">Nội dung</th>
                                        <th class="col-md-2">Tóm tắt</th>
                                        <th class="col-md-2">Ảnh</th>
                                        {{-- <th class="col-md-2">Video</th> --}}
                                        <th class="col-md-2">Năm</th>
                                        <th class="col-md-2">Thành Lập</th>
                                        <th class="col-md-2">Phần trăm</th>
                                        <th class="col-md-2">Nội dung phần trăm</th>
                                        <th class="col-md-2">Đối tác</th>
                                        <th class="col-md-2">Nội dung đối tác</th>
                                        <th class="col-md-2">Nhân viên</th>
                                        <th class="col-md-2">Nội dung nhân viên</th>
                                        <th class="col-md-2">Hành Động</th>
                                      

                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                        @foreach ($introduce as $item)
                                            
                                       
                                        <td>{{ $item->title }}</td>
                                        <td> {{ $item->content }}</td>
                                        <td> {{ $item->sammary }} </td>
                                        <td><img width="100px" src="../public/images/{{ $item->image }}"></td>
                                        {{-- <td><p style="height: 200px; overflow: auto">{{$value->content}}</p></td> --}}
                                        {{-- <td><img width="100px" src="{{asset('assets/img_new/'.$value->image)}}"></td> --}}
                                        {{-- <td> {{ $item->video }} </td> --}}
                                        <td> {{ $item->nams }}</td>
                                        <td> {{ $item->thanhlap }}</td>
                                        <td> {{ $item->phantram }}</td>
                                        <td> {{ $item->noidungphantram }}</td>
                                        <td> {{ $item->doitac }}</td>
                                        <td> {{ $item->noidungdoitac }}</td>
                                        <td> {{ $item->nhanvien }}</td>
                                        <td> {{ $item->noidungnhanvien }}</td>
                                        <td>
                                            <a class="btn btn-default" href="admin/introduct/edit/{{ $item->id }}"
                                                title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
                                          
                                        </td>
                                        @endforeach
                                    </tr>
                                  
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</div>

<script language="JavaScript">
    function confirmAction() {
        return confirm("Bạn có chắc chắn không ?")
    }

</script>

{{-- modal --}}
<div class="container container-fluid">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Thông tin người dùng tin tức</h2>
                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button> --}}
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="cont">

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
@stop

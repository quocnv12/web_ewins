@extends('admins.layout.master-layout')
@section('title')
    Danh sách dịch vụ
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách dịch vụ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách dịch vụ</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('service.add')}}" class="btn btn-primary">Thêm dịch vụ</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Tên dịch vụ</th>
                                        <th class="col-md-2">Loại dịch vụ</th>
                                        <th class="col-md-2">Ảnh</th>
                                        <th class="col-md-2">Tóm tắt</th>
                                        <th class="col-md-2">Nội dung</th>
                                        <th class="col-md-2">Trạng thái</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($service as $value)
                                        <tr class="odd gradeX" >
                                            <td >{{$value->name}}</td>
                                            <td >{{$value->cate_name}}</td>
                                            <td ><img style="width:100%" src="{{asset('assets/img_service/'.$value->image)}}"></td>
                                            <td >
                                                <div style="overflow: auto; height: 100px">{{ $value->content }}</div>
                                            </td>
                                            <td >
                                                <div style="overflow: auto; height: 100px">{{ $value->summary }}</div>
                                            </td>
                                            <td >
                                                @if($value->status==1)
                                                Cho hiện
                                                @else
                                                Ẩn
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-default" href="{{Route('service.edit',['id'=> $value->id]) }}">Sửa</a>
                                                <a href="{{Route('service.delete',['id'=> $value->id]) }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
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
    </div>
@stop
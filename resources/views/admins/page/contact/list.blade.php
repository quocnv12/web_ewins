@extends('admins.layout.master-layout')
@section('title')
    Danh sách liên hệ
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách liên hệ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách tin tức</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Tên</th>
                                        <th class="col-md-2">Email</th>
                                        <th class="col-md-2">SĐT</th>
                                        <th class="col-md-2">Tên CTY</th>
                                        <th class="col-md-2">Địa chỉ CTY</th>
                                        <th class="col-md-2">Nội dung</th>
                                        <th class="col-md-2">Trạng thái</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contact as $value)
                                        <tr class="odd gradeX" >
                                            <td >{{$value->name}}</td>
                                            <td >{{$value->email}}</td>
                                            <td >{{$value->phone}}</td>
                                            <td >{{$value->name_city}}</td>
                                            <td >{{$value->address_city}}</td>
                                            <td >{{$value->content}}</td>
                                            <td >
                                            @if($value->status == 0)
                                                Chưa xem
                                            @elseif($value->status == 1)
                                                Đã xem
                                            @else
                                                Đã phản hổi
                                            @endif
                                            </td>
                                            <td>
                                                @if($value->status == 0)
                                                <a href="{{Route('contact.see',['id'=> $value->id,'status'=> 1]) }}" class="btn btn-primary">Duyệt</a>
                                                @elseif($value->status == 1)
                                                <a href="{{Route('contact.feedback',['id'=> $value->id,'status'=> 2]) }}" class="btn btn-primary">Phản hồi</a>
                                                @endif
                                                <a href="{{Route('contact.delete',['id'=> $value->id]) }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
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
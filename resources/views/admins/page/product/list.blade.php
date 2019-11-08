@extends('admins.layout.master-layout')
@section('title')
Danh sách sản phẩm
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Danh sách sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Danh sách sản phẩm</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="box-header">
                    <a href="{{route('product.add')}}" class="btn btn-primary">Thêm sản phẩm</a>
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th class="col-md-2">Ảnh</th> --}}
                                        <th class="col-md-2">Tên</th>
                                        <th class="col-md-2">Link</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($product as $value)
                                    <tr class="odd gradeX">
                                        {{-- <td><img width="100px" src="{{asset('assets/img_product/'.$value->image)}}"></td> --}}
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->link}}</td>
                                        <td>
                                            <a class="btn btn-default" href="{{Route('product.edit',['id'=> $value->id]) }}"
                                                title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
                                            <a href="{{Route('product.delete',['id'=> $value->id]) }}"
                                                class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
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
                    <h2 class="modal-title">Thông tin người dùng product</h2>
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

@extends('admins.layout.master-layout')
@section('title')
    Sửa thông tin công ty
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa thông tin công ty
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa thông tin công ty</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{Route('infor_company.edit',['id'=>$infor_company->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên công ty (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề thông tin công ty" name="name"
                                   value="{{ $infor_company->name }}">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>

                         <div class="form-group">
                            <label>Mã số thuế (*)</label>
                            <input type="text" class="form-control" placeholder="Mã số thuế" name="masothue"
                                   value="{{ $infor_company->masothue }}">
                            <p style="color:red">{{ $errors->first('masothue') }}</p>
                        </div>

                         <div class="form-group">
                            <label>Số điện thoại (*)</label>
                            <input type="text" class="form-control" placeholder="Số điện thoại" name="phone"
                                   value="{{ $infor_company->phone }}">
                            <p style="color:red">{{ $errors->first('phone') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ (*)</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="address"
                                   value="{{ $infor_company->address }}">
                            <p style="color:red">{{ $errors->first('address') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Email (*)</label>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                   value="{{ $infor_company->email }}">
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        </div>
                        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <a href="{{Route('infor_company.list')}}"><button type="submit" class="btn btn-default">Quay lại</button></a>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        CKEDITOR.replace('content', {
                    filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
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
    
    </script>

{{-- modal --}}

    </div>
@stop
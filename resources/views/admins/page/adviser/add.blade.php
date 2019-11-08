@extends('admins.layout.master-layout')
@section('title')
    Thêm cố vấn
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Thêm cố vấn
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Thêm cố vấn</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('adviser.list')}}" class="btn btn-primary">Danh sách</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{route('adviser.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tên cố vấn" name="name"
                                   value="">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>

                         <div class="form-group">
                            <label>Chức vụ (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập chức vụ của người cố vấn" name="position"
                                   value="">
                            <p style="color:red">{{ $errors->first('position') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Thông tin (*)</label>
                            <textarea name="information" id="desc" cols="30" rows="10"></textarea>
                            <p style="color:red">{{ $errors->first('information') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Chọn ảnh</label>
                            <input type="file" id="image" name="image" onchange="showIMG()">
                        </div>
                        <div class="form-group">
                            <div id="viewImg">

                            </div>
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

<script language="JavaScript">
        CKEDITOR.replace('contentt', {
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
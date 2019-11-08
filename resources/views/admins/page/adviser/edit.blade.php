@extends('admins.layout.master-layout')
@section('title')
    Sửa cố vấn
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa cố vấn
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa cố vấn</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{Route('adviser.edit',['id'=>$adviser->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Tên (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề cố vấn" name="name"
                                   value="{{ $adviser->name }}">
                            <p style="color:red">{{ $errors->first('name') }}</p>
                        </div>

                         <div class="form-group">
                            <label>Chức vụ (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập chức vụ người cố vấn" name="position"
                                   value="{{ $adviser->position }}">
                            <p style="color:red">{{ $errors->first('position') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Thông tin (*)</label>
                            <textarea name="information" id="desc" cols="30" rows="10">{{ $adviser->information }}</textarea>
                            <p style="color:red">{{ $errors->first('information') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Chọn ảnh</label>
                            <input type="file" id="image" name="image" onchange="showIMG()">
                            <p style="color:red">{{ $errors->first('image') }}</p>
                        </div>
                        <div class="form-group" id="lastImg">
                            <div>
                                <img style="width:200px" src="{{asset('assets/img_adviser/'.$adviser->image)}}" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="viewImg">

                            </div>
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
                    document.getElementById('lastImg').style.display = "none";
                }
    
    </script>

{{-- modal --}}

    </div>
@stop
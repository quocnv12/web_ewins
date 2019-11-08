@extends('admins.layout.master-layout')
@section('title')
Sửa giới thiệu
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Sửa giới thiệu
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa giới thiệu</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Tiêu đề (*)</label>
                                    <input type="text" class="form-control" name="title" value="{{ $introduct->title }}">

                                </div>

                                <div class="form-group">
                                    <label>Nội dung (*)</label>
                                    <input type="text" class="form-control" name="content"
                                        value="{{ $introduct->content }}">

                                </div>

                                <div class="form-group">
                                    <label>Tóm tắt (*)</label>
                                    <input type="text" class="form-control" name="sammary"
                                        value="{{ $introduct->sammary }}">

                                </div>

                                <div class="form-group">
                                        <label>Chọn ảnh</label>
                                        <input type="file" id="image" name="image" onchange="fileValidation(this)">
                                        {{-- <p style="color:red">{{ $errors->first('image') }}</p> --}}
                                        <div id="imagePreviewimage">
                                                <img style="width:200px;" src="../public/images/{{ $introduct->image }}" >
                                        </div>
                                </div>
                                

                <script>
                        function fileValidation(obj) {
                            var filePath = obj.value;
                            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                        
                            if (!allowedExtensions.exec(filePath)) {
                                alert('You can only select files with .jpeg/.jpg/.png/.gif extension.');
                                obj.value = '';
                                return false;
                            } else {
                            
                                if (obj.files && obj.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        document.getElementById('imagePreview'+obj.id).innerHTML = '<img style="width:200px;" src="' + e.target.result + '"/>';
                                    };
                                    reader.readAsDataURL(obj.files[0]);
                                }
                            }
                        }
                
                </script>

                                <div class="form-group">
                                    <label>Video (*)</label>
                                    <input type="text" class="form-control" name="video"
                                        value="{{ $introduct->video }}">
                                </div>

                                <div class="form-group">
                                    <label>Năm thành lập (*)</label>
                                    <input type="text" class="form-control" name="nams" value="{{ $introduct->nams }}">
                                </div>

                                <div class="form-group">
                                    <label>Nội dung năm thành lập (*)</label>
                                    <input type="text" class="form-control" name="thanhlap"
                                        value="{{ $introduct->thanhlap }}">
                                </div>

                                <div class="form-group">
                                    <label>Phần trăm tăng trưởng (*)</label>
                                    <input type="text" class="form-control" name="phantram"
                                        value="{{ $introduct->phantram }}">
                                </div>

                                <div class="form-group">
                                    <label>Nội dunng phần trăm tăng trưởng (*)</label>
                                    <input type="text" class="form-control" name="noidungphantram"
                                        value="{{ $introduct->noidungphantram }}">
                                </div>

                                <div class="form-group">
                                    <label>Số lượng đối tác (*)</label>
                                    <input type="text" class="form-control" name="doitac"
                                        value="{{ $introduct->doitac }}">
                                </div>

                                <div class="form-group">
                                    <label>Nội dung đối tác (*)</label>
                                    <input type="text" class="form-control" name="noidungdoitac"
                                        value="{{ $introduct->noidungdoitac }}">
                                </div>

                                <div class="form-group">
                                    <label>Số lượng nhân viên (*)</label>
                                    <input type="text" class="form-control" name="nhanvien"
                                        value="{{ $introduct->nhanvien }}">
                                </div>

                                <div class="form-group">
                                    <label>Nội dung nhân viên (*)</label>
                                    <input type="text" class="form-control" name="noidungnhanvien"
                                        value="{{ $introduct->noidungnhanvien }}">
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                    <a class="btn btn-default" href="admin/introduct/prize">Quay lại</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <b></b>
    </div>
</div>

{{-- <script language="JavaScript">
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
                    document.getElementById('viewImg').innerHTML =
                        '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

</script> --}}

{{-- modal --}}

</div>
@stop

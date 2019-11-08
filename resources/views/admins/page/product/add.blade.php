@extends('admins.layout.master-layout')
@section('title')
Thêm sản phẩm
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Thêm sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Thêm sản phẩm</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="box-header">
                    <a href="{{route('product.list')}}" class="btn btn-primary">Danh sách</a>
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST" action="{{route('product.add')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Tên sản phẩm (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm"
                                        name="name" value="{{ old('name') }}">
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Link (*)</label>
                                    <input type="text" class="form-control" placeholder="Liên kết" name="link"
                                        value="{{ old('link') }}">
                                    <p style="color:red">{{ $errors->first('link') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung (*)</label>
                                    <input type="text" class="form-control" placeholder="Nội dung" name="content"
                                        value="{{ old('content') }}">
                                    <p style="color:red">{{ $errors->first('content') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái (*)</label>
                                    <div class="radio">
                                        <label for=""><input type="radio" name="status" value="1">Cho hiện</label>
                                    </div>
                                    <div class="radio">
                                        <label for=""><input type="radio" name="status" value="0">Ẩn</label>
                                    </div>
                                    <p style="color:red">{{ $errors->first('status') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Chọn ảnh</label>
                                    <input type="file" id="image" name="image" onchange="showIMG()">
                                </div>
                                <p style="color:red">{{ $errors->first('image') }}</p>
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
                var reader = product FileReader();
                reader.onload = function (e) {
                    document.getElementById('viewImg').innerHTML =
                        '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

</script>

{{-- modal --}}


@stop

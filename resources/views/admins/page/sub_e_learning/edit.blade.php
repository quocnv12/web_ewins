@extends('admins.layout.master-layout')
@section('title')
Sửa hạng mục e-learning
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Sửa hạng mục e-learning
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa hạng mục e-learning</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST"
                            action="{{Route('sub_e_learning.update',['id'=>$sub_e_learning->id])}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Tên hạng mục (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tên hạng mục e-learning"
                                        name="name" value="{{ $sub_e_learning->name }}">
                                    <p style="color:red">{{ $errors->first('name') }}</p>
                                </div>


                                <div class="form-group">
                                    <label for="">Loại tin e-learning (*)</label>
                                    <select class="form-control" name="cate_id" id="">
                                        @foreach($e_learning as $value)
                                        @php
                                        $cate = $value->id == $sub_e_learning->cate_id ? "selected" : '';
                                        @endphp
                                        <option {{ $cate }} value="{{ $value->id }}">{{ $value->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                    <a href="{{Route('e_learning.list')}}"><button type="submit"
                                            class="btn btn-default">Quay lại</button></a>
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
                    document.getElementById('viewImg').innerHTML =
                        '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
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

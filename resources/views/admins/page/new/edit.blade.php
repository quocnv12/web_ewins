@extends('admins.layout.master-layout')
@section('title')
Sửa tin tức
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Sửa tin tức
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sửa tin tức</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <form role="form" method="POST" action="{{Route('new.edit',['id'=>$new->id])}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Title (*)</label>
                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề tin tức"
                                        name="title" value="{{ $new->title }}">
                                    <p style="color:red">{{ $errors->first('title') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Tóm tắt (*)</label>
                                    <input type="text" class="form-control" placeholder="Tóm tắt" name="summary"
                                        value="{{ $new->summary }}">
                                    <p style="color:red">{{ $errors->first('summary') }}</p>
                                </div>

                                <div class="form-group">
                                    <label>Nội dung (*)</label>
                                    <textarea name="content" id="desc" cols="30"
                                        rows="10">{{ $new->content }}</textarea>
                                    <p style="color:red">{{ $errors->first('content') }}</p>
                                </div>

                                <?php if($new->status ==1){
                            $check1 = 'checked="select"';
                           $check0 = '';
                       }else{
                           $check1 = '';
                           $check0 = 'checked="select"';
                       } ?>
                                <div class="form-group">
                                    <label>Trạng thái (*)</label>
                                    <div class="radio">
                                        <label for=""><input {{$check1}} type="radio" name="status" value="1">Cho
                                            hiện</label>
                                    </div>
                                    <div class="radio">
                                        <label for=""><input {{$check0}} type="radio" name="status" value="0">Ẩn</label>
                                    </div>
                                    <p style="color:red">{{ $errors->first('status') }}</p>
                                </div>

                                <div class="form-group" id="lastImg">
                                    <div>
                                        <img style="width:200px" src="{{asset('assets/img_new/'.$new->image)}}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="viewImg">

                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                    <a href="{{Route('new.list')}}"><button type="submit" class="btn btn-default">Quay
                                            lại</button></a>
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


@stop

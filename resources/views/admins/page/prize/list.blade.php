@extends('admins.layout.master-layout')
@section('title')
    Giới thiệu giải thưởng
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        @if (session('thongbao'))
                                            
                                                
                                                <script>
                                                    alert('{{ session('thongbao') }}')
                                                </script>
                                            
                                        @endif
                                            

                                        <th class="col-md-6">Tiêu đề</th>
                                        <th class="col-md-6">Nội dung</th>
                                        <th class="col-md-2">Hành động</th>
                                        
                                      

                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                       
                                       @foreach ($prize as $item)
                                           
                                
                                       
                                        <td> {{ $item->title }} </td>
                                        <td> {{ $item->content }} </td>
                                        
                                      
                                        
                                        <td>
                                            <a class="btn btn-default" href="admin/introduct/prize/edit/{{ $item->id }}"
                                                title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
                                          
                                        </td>
                                        @endforeach  
                                    </tr>
                                  
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
@stop

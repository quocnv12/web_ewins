@extends('admins.layout.master-layout')
@section('title')
    Danh sách thành viên

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách thành viên
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách thành viên</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                        @if (session('thongbao'))
                        <script>
                            alert('{{ session('thongbao') }}')
                        </script>
						
					@endif
                    <a href="admin/register" class="btn btn-primary">Thêm thành viên</a>
                </div>
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2">Name</th>
                                        <th class="col-md-2">Email</th>
                                        <th class="col-md-2">Phone</th>
                                        <th class="col-md-2">Level</th>
										<th class="col-md-2">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
										@foreach ($admins as $row)
											<tr class="odd gradeX" >
												<td >{{$row->name}}</td>
												<td >{{$row->email}}</td>
												<td >{{$row->phone}}</td>
												<td >{{ $row->role->name }}  </td>
												<td >{{$row->status}}</td>
													<td>
														<a class="btn btn-default" href="" title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
														<a href="admin/del/{{ $row->id }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
													</td>
											</tr>
										@endforeach	
                                    </tbody>
                                </table>
							</div>
							


							<div align="right">{{ $admins->links() }}</div>
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
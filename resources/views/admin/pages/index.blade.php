
    <body class="sb-nav-fixed">
    @include('admin.layouts.header-top')
        <div id="layoutSidenav">
            @include('admin.layouts.left')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Đơn đặt phòng</h1>
                        <ol class="breadcrumb mb-4">
                            <button> <a data-toggle="modal" data-target="#exampleModal2" class="text-black">
                                <i class="fas fa fa-check-circle mr-2"></i>Thêm </a></button>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Đơn đặt phòng mới
                            </div>

                            <!-- Bảng đặt phòng mới -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>MADP</th>
                                                <th>ID Khách hàng</th>
                                                <th>Tên khách hàng</th>
                                                <th>Số điện thoại </th>
                                                <th>ID Phòng</th>
                                                <th>Tên Phòng</th>
                                                <th>Số lượng</th>
                                                <th>Ngày đến</th>
                                                <th>Ngày đi</th>
                                                <th>Người lớn</th>
                                                <th>Trẻ em</th>
                                                <th>Tình trạng</th>
                                                <th>Giá tạm tính</th>
                                                <th>Ghi chú</th>
                                                <th>EDIT</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data as $dondatphong )


                                            <tr>
                                                <td>{{ $dondatphong -> id }}</td>
                                                <td>{{ $dondatphong -> khachhang_id }}</td>
                                                <td>{{ $dondatphong -> tenkhachhang }}</td>
                                                <td>{{ $dondatphong -> sdt }}</td>
                                                <td>{{ $dondatphong -> loaiphong_id }}</td>
                                                <td>{{ $dondatphong -> tenphong }}</td>
                                                <td>{{ $dondatphong -> sl }}</td>
                                                <td>{{ $dondatphong -> ngayden }}</td>
                                                <td>{{ $dondatphong -> ngaydi }}</td>
                                                <td>{{ $dondatphong -> slnguoilon }}</td>
                                                <td>{{ $dondatphong -> sltreem }}</td>
                                                <td>
                                                    {{ $dondatphong -> tinhtrang }}
                                                 </td>
                                                 <td>{{ $dondatphong -> giatamtinh }} </td>
                                                <td>{{ $dondatphong -> ghichu }}</td>
                                                <td>
                                                    <button><a href="{{ url('suadatphong_admin',['madp' => $dondatphong -> id]) }}"> Sửa</a></button>
                                                    <button><a href="{{ url('xoadatphong_admin',['madp' => $dondatphong -> id]) }}"> Xóa</a></button><br>


                                                </td>

                                            </tr>


            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                <!-- Bảng đặt phòng đã confirm -->
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Đơn đặt phòng đã xác nhận
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>MADP</th>
                                                <th>ID Khách hàng</th>
                                                <th>Tên khách hàng</th>
                                                <th>ID Phòng</th>
                                                <th>Tên Phòng</th>
                                                <th>Số lượng</th>
                                                <th>Ngày đến</th>
                                                <th>Ngày đi</th>
                                                <th>Người lớn</th>
                                                <th>Trẻ em</th>
                                                <th>Tình trạng</th>
                                                <th>Giá tạm tính</th>
                                                <th>Ghi chú</th>
                                                <th>EDIT</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data2 as $dondatphong2 )


                                            <tr>
                                                <td>{{ $dondatphong2 -> id }}</td>
                                                <td>{{ $dondatphong2 -> khachhang_id }}</td>
                                                <td>{{ $dondatphong2 -> tenkhachhang }}</td>
                                                <td>{{ $dondatphong2 -> loaiphong_id }}</td>
                                                <td>{{ $dondatphong2 -> tenphong }}</td>
                                                <td>{{ $dondatphong2 -> sl }}</td>
                                                <td>{{ $dondatphong2 -> ngayden }}</td>
                                                <td>{{ $dondatphong2 -> ngaydi }}</td>
                                                <td>{{ $dondatphong2 -> slnguoilon }}</td>
                                                <td>{{ $dondatphong2 -> sltreem }}</td>
                                                <td>
                                                    {{ $dondatphong2 -> tinhtrang }}
                                                 </td>
                                                 <td> {{ $dondatphong2 -> giatamtinh }}</td>
                                                <td>{{ $dondatphong2 -> ghichu }}</td>
                                                <td>
                                                    <button><a href="{{ url('suadatphong_admin',['madp' => $dondatphong2 -> id]) }}"> Sửa</a></button>
                                                    <button><a href="{{ url('xoadatphong_admin',['madp' => $dondatphong2 -> id]) }}"> Xóa</a></button><br>


                                                </td>

                                            </tr>


            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
<!-- Bảng đặt phòng đã confirm -->
<!-- Bảng đã check in -->

<!-- -->
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm mới đặt phòng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ 'themdatphong' }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" placeholder=" " name="tenkhachhang" required="">

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Phòng</label>
                        <select name="loaiphong_id">
                         <option value="1">Phòng thương gia</option>
                         <option value="2">Phòng gia đình</option>
                         <option value="3">Phòng đơn</option>
                         <option value="4">Phòng nghỉ dài ngày</option>
                         <option value="5">Phòng tình yêu</option>
                         <option value="6">Phòng ngắm biển</option>

                        </select>

                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Số lượng phòng</label>
                        <input type="fload" class="form-control" placeholder=" " name="sl" required="">

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ngày đến</label>
                        <input type="date" class="form-control" placeholder=" " name="ngayden" >

                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Ngày đi</label>
                        <input type="date" class="form-control" placeholder=" " name="ngaydi" >

                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Sl người lớn</label>
                        <input type="fload" class="form-control" placeholder=" " name="slnguoilon">

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Sl trẻ em</label>
                        <input type="fload" class="form-control" placeholder=" " name="sltreem">

                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Lưu">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

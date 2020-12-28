<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <base href="{{ asset('') }}">
        <title>Hằng Lê Hotel</title>
        <link href="assets/admin/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    @include('admin.layouts.header-top')
        <div id="layoutSidenav">
            @include('admin.layouts.left')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Đơn đặt phòng</h1>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Phòng đã check in
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
                                                <th>ID Phòng</th>
                                                <th>Tên Phòng</th>
                                                <th>Số lượng</th>
                                                <th>Ngày đến</th>
                                                <th>Ngày đi</th>
                                                <th>Người lớn</th>
                                                <th>Trẻ em</th>
                                                <th>Tình trạng</th>
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
                                Phòng đã check out
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
                                                <th>Giá </th>
                                                <th>Feed Back</th>
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
                                                 <td>{{ $dondatphong2 -> giatamtinh  }}</td>
                                                <td>{{ $dondatphong2 -> feedback }}</td>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/admin/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>



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
        <link href="assets/admin/css/thongbao.css" rel="stylesheet" />
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
                        <ol class="breadcrumb mb-4">
                            <button><a href="index.html">Thêm</a></button>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Đơn đặt phòng mới
                            </div>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>MADP</th>
                                                <th>ID Khách hàng</th>
                                                <th>Tên khách hàng</th>
                                                <th>Phòng</th>

                                                <th>Số lượng</th>
                                                <th>Ngày đến</th>
                                                <th>Ngày đi</th>
                                                <th>Người lớn</th>
                                                <th>Trẻ em</th>
                                                <th>Tình trạng</th>
                                                <th>Giá tạm tính</th>

                                                <th>EDIT</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data as $dondatphong )

  <form action="{{ 'luudatphong' }}" method="POST">
    @csrf                                 <tr>
                                                <td><input type="text" name="id" value="{{ $dondatphong -> id }}"></td>
                                                <td><input type="text" name="khachhang_id" value="{{ $dondatphong -> khachhang_id }}"></td>
                                                <td><input type="text" name="tenkhachhang" value="{{ $dondatphong -> tenkhachhang }}"></td>
                                                <td>



                                                    <select name="loaiphong_id">
                                                        <option value="{{ $dondatphong -> id }}">{{ $dondatphong -> tenphong }}</option>



                                                     <option value="1">Phòng thương gia</option>
                                                     <option value="2">Phòng gia đình</option>
                                                     <option value="3">Phòng đơn</option>
                                                     <option value="4">Phòng nghỉ dài ngày</option>
                                                     <option value="5">Phòng tình yêu</option>
                                                     <option value="6">Phòng ngắm biển</option>

                                                    </select>
                                                </td>

                                                <td><input type="fload" name="sl" value="{{ $dondatphong -> sl }}"></td>
                                                <td><input type="date" name="ngayden" value="{{ $dondatphong -> ngayden }}"></td>
                                                <td><input type="date" name="ngaydi" value="{{ $dondatphong -> ngaydi }}"></td>
                                                <td><input type="fload" name="slnguoilon" value="{{ $dondatphong -> slnguoilon }}"></td>
                                                <td><input type="fload" name="sltreem" value="{{ $dondatphong -> sltreem }}"></td>
                                                <td>
                                                    <select name="tinhtrang">
                                                        <option value="{{ $dondatphong -> tinhtrang }}">{{ $dondatphong -> tinhtrang }}</option>
                                                        <option value="confirm">Confirm</option>
                                                        <option value="check in">Check in</option>
                                                        <option value="check out">Check out</option>
                                                        <option value="null">Không xác định</option>
                                                    </select>
                                                 </td>
                                                 <td><input type="fload" name="giatamtinh" value="{{ $dondatphong -> giatamtinh }}"> </td>
                                                <td><input type="submit" class="form-control" value="Lưu"> </td>



                                            </tr>
  </form>


            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>




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

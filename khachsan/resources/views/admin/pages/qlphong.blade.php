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
                        <h1 class="mt-4">Các phòng của khách sạn</h1>
                        <ol class="breadcrumb mb-4">
                            <button> <a data-toggle="modal" data-target="#exampleModal2" class="text-black">
                                <i class="fas fa fa-check-circle mr-2"></i>Thêm </a></button>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Các phòng
                            </div>
                            <!-- Bảng đặt phòng mới -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID phòng</th>
                                                <th>Tên phòng</th>
                                                <th>Số lượng người</th>
                                                <th>Diện tích</th>
                                                <th>Giá</th>
                                                <th>Mô tả</th>
                                                <th>Ảnh phòng</th>
                                                <th>Ảnh phòng khách</th>
                                                <th>Ảnh nhà tắm</th>
                                                <th>Ảnh phòng ngủ</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data as $phong )


                                            <tr>
                                                <td>{{ $phong -> id }}</td>
                                                <td>{{ $phong -> tenphong }}</td>
                                                <td>{{ $phong -> SLmax }}</td>
                                                <td>{{ $phong -> dientich }}</td>
                                                <td>{{ $phong -> gia }}</td>
                                                <td>{{ $phong -> mota }}</td>
                                                <td>{{ $phong -> loaiphong_images }}</td>
                                                <td>{{ $phong -> phongkhach }}</td>
                                                <td>{{ $phong -> phongtam }}</td>
                                                <td>{{ $phong -> phongngu }}</td>

                                                <td>
                                                    <button><a href="{{ url('suaphong',['id' => $phong -> id]) }}"> Sửa</a></button>


                                                </td>

                                            </tr>


            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                <!-- Bảng đặt phòng đã confirm -->

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


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm mới phòng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ 'postthemphong' }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Tên phòng</label>
                        <input type="text" class="form-control" placeholder=" " name="tenphong" required="">

                    </div>
                    <div class="form-group">
                        <input type="fload" class="form-control" placeholder="Số lượng người max " name="SLmax" required="">

                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Diện tích</label>
                        <input type="fload" class="form-control" placeholder=" " name="dientich" required="">

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Giá</label>
                        <input type="fload" class="form-control" placeholder=" " name="gia" >

                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Mô tả</label>
                        <input type="text" class="form-control" placeholder=" " name="mota" >

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ảnh tổng quan</label>
                        <input type="file" name="loaiphong_images" >

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ảnh phòng khách</label>
                        <input type="file" name="phongtam" >
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ảnh phòng tắm</label>
                        <input type="file" name="phongkhach" >

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Ảnh phòng ngủ</label>
                        <input type="file" name="phongngu" >

                    </div>


                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Lưu">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


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
                                                <th>ID Khách hàng</th>
                                                <th>Tên Khách hàng</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại </th>


                                                <th>EDIT</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data as $user )


                                            <tr>
                                                <td>{{ $user -> id }}</td>
                                                <td>{{ $user -> name }}</td>
                                                <td>{{ $user -> email }}</td>
                                                <td>{{ $user -> diachi }}</td>
                                                <td>{{ $user -> sdt }}</td>




                                                <td>
                                                    <button><a href="{{ url('suakhachhang',['id' => $user -> id]) }}"> Sửa</a></button>


                                                </td>

                                            </tr>


            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>



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
                        <h5 class="modal-title">Đăng kí</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ 'register' }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Họ và tên</label>
                                <input type="text" class="form-control" placeholder=" " name="name" required="">

                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Địac chỉ email</label>
                                <input type="text" class="form-control" placeholder=" " name="email" required="">

                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Địa chỉ</label>
                                <input type="text" class="form-control" placeholder=" " name="diachi" id="diachi" required="">

                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder=" " name="sdt" id="sdt" required="">

                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder=" " name="password" id="password" required="">

                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" placeholder=" " name="repassword" id="repassword" required="">


                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

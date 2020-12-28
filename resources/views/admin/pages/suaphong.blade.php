
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
                                                <th>ID phòng</th>
                                                <th>Tên phòng</th>
                                                <th>Số lượng người</th>
                                                <th>Diện tích</th>
                                                <th>Giá</th>
                                                <th>Mô tả</th>

                                                <th>Edit</th>
                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($data as $phong )

            <form action="{{ 'postsuaphong' }}" method="POST"  >
                @csrf
                                            <tr>
                                                <td><input type="text" name="id" value="{{ $phong -> id }}"></td>
                                                <td><input type="text" name="tenphong" value="{{ $phong -> tenphong }}"></td>
                                                <td><input type="text" name="SLmax" value="{{ $phong -> SLmax }}"></td>
                                                <td><input type="text" name="dientich" value="{{ $phong -> dientich }}"></td>
                                                <td><input type="text" name="gia" value="{{ $phong -> gia }}"></td>
                                                <td><input type="text" name="mota" value="{{ $phong -> mota }}"></td>


                                                <td>
                                                    <input type="submit" class="form-control" value="Lưu">



                                                </td>

                                            </tr>

            </form>
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




    @include('admin.layouts.header-top')
    <div id="layoutSidenav">
        @include('admin.layouts.left')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa tài khoản người dùng</h1>


                    <div class="card mb-4">


                        <!-- Bảng đặt phòng mới -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Khách hàng</th>
                                            <th>Tên Khách hàng</th>
                                            <th>Email</th>
                                            <th> Passwword</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại </th>


                                            <th>EDIT</th>
                                        </tr>
                                    </thead>

                                    <tbody>
        @foreach ($data as $user )

<form action="{{ 'postkh' }}" method="post">
    @csrf
                                        <tr>
                                            <td><input type="text" name="id" value="{{ $user -> id }}"></td>
                                            <td><input type="text" name="name" value="{{ $user -> name }}"></td>

                                            <td><input type="text" name="email" value="{{ $user -> email }}"></td>
                                            <td><input type="password" name="password" value="{{ $user -> password }}"> </td>
                                            <td><input type="text" name="diachi" value="{{ $user -> diachi }}"></td>
                                            <td><input type="text" name="sdt" value="{{ $user -> sdt }}"></td>




                                            <td>
                                                <input type="submit" value="Lưu" name="submit">


                                            </td>

                                        </tr>
</form>

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




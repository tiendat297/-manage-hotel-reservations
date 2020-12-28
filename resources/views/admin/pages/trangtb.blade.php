

    @include('admin.layouts.header-top')
        <div id="layoutSidenav">
            @include('admin.layouts.left')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Trang thiết bị của mỗi phòng</h1>
                        <ol class="breadcrumb mb-4">
                            <button> <a data-toggle="modal" data-target="#exampleModal2" class="text-black">
                                <i class="fas fa fa-check-circle mr-2"></i>Thêm </a></button>

                                <button> <a data-toggle="modal" data-target="#exampleModal3" class="text-black">
                                    <i class="fas   fa-trash mr-2"></i>Xóa </a></button>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Trang thiết bị
                            </div>

                            <!-- Bảng đặt phòng mới -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID Phòng</th>
                                                <th>Tên phòng</th>
                                                <th>Tên thiết bị</th>
                                                <th>Số lượng</th>




                                            </tr>
                                        </thead>

                                        <tbody>
            @foreach ($trangthietbi as $tb )


                                            <tr>
                                                <td>{{ $tb -> loaiphong_id }}</td>
                                                <td>{{ $tb -> tenphong }}</td>
                                                <td>{{ $tb -> tenthietbi }}</td>
                                                <td>{{ $tb -> sl }}</td>







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

            </div>
        </div>


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm mới trang thiết bị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ 'postttb' }}" method="post">
                    @csrf

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
                        <label class="col-form-label">Tên trang thiết bị</label>
                        <select name="trangthietbi_id">
                            <option value="1">Giường</option>
                            <option value="2">TI VI</option>
                            <option value="3">Điều hòa</option>
                            <option value="4">Internet</option>
                            <option value="5">Tủ lạnh</option>
                            <option value="6">Phòng tắm</option>
                            <option value="7">Tủ treo đồ</option>
                            <option value="8">Bếp nướng</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Số lượng</label>
                        <input type="fload" name="sl">
                    </div>

                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Lưu">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xóa trang thiết bị</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ 'xoattb' }}" method="post">
                    @csrf

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
                        <label class="col-form-label">Tên trang thiết bị</label>
                        <select name="trangthietbi_id">
                            <option value="1">Giường</option>
                            <option value="2">TI VI</option>
                            <option value="3">Điều hòa</option>
                            <option value="4">Internet</option>
                            <option value="5">Tủ lạnh</option>
                            <option value="6">Phòng tắm</option>
                            <option value="7">Tủ treo đồ</option>
                            <option value="8">Bếp nướng</option>

                        </select>
                    </div>



                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Xóa">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>




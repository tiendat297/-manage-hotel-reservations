@include('client.layouts.header-top')
@include('client.layouts.header-botom')
@include('client.layouts.menu')

	 <!-- //banner-2 -->
	 <!-- page -->

    <ul class="w3_short">
		<li>
		<a href= "home">Trang Chủ</a>

		</li>
		<li>Đặt phòng</li>
    </ul>


    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        Phòng của  {{ Auth::user()->name ?? ' ' }}
    </h3>




	<!-- //banner-2 -->
	<!-- page -->
		<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">

			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Xin hãy nghe điện thoại tư vấn khách hàng của chúng tôi 09677-234-26
				</h4>
				<div class="table-responsive">

					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Mã đơn đặt phòng</th>
								<th>ID khách hàng</th>
								<th>Tên khách hàng</th>
								<th>Tên phòng</th>
								<th>Số lượng</th>
                                <th>Ngày đến</th>
                                <th>Ngày đi</th>
                                <th>Số lượng người lớn</th>
                                <th>Số lượng trẻ em</th>

                                <th>Chỉnh sửa</th>

							</tr>
                        </thead>

						<tbody>

 <form action="{{ 'suadatphong' }}" method="POST">
@foreach ($phong as $ttphong )

							<tr class="rem1">
								<td class="invert"><input type="fload" name="id" value="{{ $ttphong -> id }}"></td>
								<td class="invert">{{ $ttphong -> khachhang_id }}</td>
                                <td class="invert">{{ $ttphong -> tenkhachhang }}</td>
                                <td class="invert">{{ $ttphong -> tenphong }}</td>

                                <td class="invert"><input type="fload" name="sl" value="{{ $ttphong -> sl }}"></td>
                                <td class="invert"><input type="date" name="ngayden" value="{{ $ttphong -> ngayden }}"></td>
                                <td class="invert"><input type="date" name="ngaydi" value="{{ $ttphong -> ngaydi }}"></td>
                                <td class="invert"><input type="fload" name="slnguoilon" value="{{ $ttphong -> slnguoilon }}"></td>
                                <td class="invert"><input type="fload" name="sltreem" value="{{ $ttphong -> sltreem }}"></td>

								<td class="invert">
									<input type="submit" class="form-control" value="Lưu">
								</td>
                            </tr>

           @endforeach
  </form>

                        </tbody>

					</table>
				</div>
			</div>

		</div>
    </div>



    @include('client.layouts.duoi')



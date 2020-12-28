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
                                <th>Số điện thoại </th>
								<th>Tên phòng</th>

								<th>Số lượng phòng</th>

                                <th>Ngày đến</th>
                                <th>Ngày đi</th>
                                <th>Số lượng người lớn</th>
                                <th>Số lượng trẻ em</th>
                                <th>Tình trạng</th>
                                <th>Giá tạm tính </th>
                                <th>Chỉnh sửa</th>

							</tr>
                        </thead>

						<tbody>






           @foreach ( $data as $value )
							<tr class="rem1">
								<td class="invert">{{ $value -> id }}</td>
								<td >{{ $value -> khachhang_id }} </td>
                                <td class="invert">{{ $value -> tenkhachhang }}</td>
                                <td class="invert">{{ $value -> sdt }}</td>
								<td class="invert">{{ $value -> tenphong }}</td>
                                <td class="invert">{{ $value -> sl }}</td>
                                <td class="invert">{{ $value -> ngayden }}</td>
                                <td class="invert">{{ $value -> ngaydi }}</td>
                                <td class="invert">{{ $value -> slnguoilon }}</td>
                                <td class="invert">{{ $value -> sltreem }}</td>
                                <td class="invert">{{ $value -> tinhtrang }}</td>
                                <td class="invert">{{ $value -> giatamtinh }} </td>

                                <?php $tinhtrang = 'check in'  ?>
                            @if ($tinhtrang = $value -> tinhtrang  )


								<td class="invert">




                                </td>
                             @else
                             <td class="invert">

                                <li class="fa fa-wrench text-black">

                                    <a

                                    href="#" data-toggle="modal" data-target="#exampleModal5">
                                        sửa </a>
                                </li>
                                <p> ---- </p>
                                <li class="fa fa-trash text-black">
                                    <a href="{{ url('xoadatphong',['madp' => $value -> id]) }}"   >
                                        Xóa </a>
                                </li>


                            </td>
                             @endif

                            </tr>

             @endforeach

                        </tbody>

					</table>
				</div>
			</div>

		</div>
    </div>


    <div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">

			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi
                </h4><br>
                <h4>Phòng bạn đã từng ở: </h4>

				<div class="table-responsive">

					<table class="timetable_sub">


						<tbody>


           @foreach ( $data2 as $value2 )
							<tr class="rem1">
								<td class="invert">{{ $value2 -> id }}</td>
								<td  class="invert">{{ $value2 -> khachhang_id }} </td>
                                <td class="invert">{{ $value2 -> tenkhachhang }}</td>
								<td class="invert">{{ $value2 -> tenphong }}</td>
                                <td class="invert">{{ $value2 -> sl }}</td>
                                <td class="invert">{{ $value2 -> ngayden }}</td>
                                <td class="invert">{{ $value2 -> ngaydi }}</td>
                                <td class="invert">{{ $value2 -> slnguoilon }}</td>
                                <td class="invert">{{ $value2 -> sltreem }}</td>
                                <td class="invert">{{ $value2 -> tinhtrang }}</td>
                                @if ($tinhtrang = $value2 -> feedback  )
                                @else
                                <td><a

                                    href="#" data-toggle="modal" data-target="#exampleModal6">
                                        Feedback </a> </td>

                            </tr>
                            @endif

             @endforeach
                        </tbody>

					</table>
				</div>
			</div>

		</div>
	</div>
    @include('client.layouts.duoi')

    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sửa đơn đặt phòng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ 'suadatphong' }}" method="post">
                        @csrf
        @foreach ( $data as $value )
                        <div class="form-group">
                            <label class="col-form-label">Mã đơn đặt phòng</label>
                            <input type="text" class="form-control" placeholder=" " name="madp" required="" value="{{ $value ->id }}">

                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Số lượng phòng</label>
                            <input type="text" class="form-control" placeholder=" " name="sl" required="" value="{{ $value -> sl }}">

                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Ngày đến</label>
                            <input type="date" class="form-control" placeholder=" " name="ngayden"  required="" value="{{ $value -> ngayden }}">

                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ngày đi</label>
                            <input type="date" class="form-control" placeholder=" " name="ngaydi"required="" value="{{ $value -> ngaydi }}">

                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Số lượng người lớn</label>
                            <input type="fload" class="form-control" placeholder=" " name="slnguoilon" required="" value="{{ $value -> slnguoilon }}">

                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Số lượng trẻ em</label>
                            <input type="fload" class="form-control" placeholder=" " name="sltreem"  required="" value="{{ $value -> sltreem }}">

                        </div>
             @endforeach
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Sửa">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cảm nhận của khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ 'postfeedback' }}" method="post">
                        @csrf
                        @foreach ( $data2 as $value2 )
                        <div class="form-group">
                            <label class="col-form-label">Mã đơn đặt phòng</label>
                            <input type="text" class="form-control" placeholder=" " name="madp" required="" value="{{ $value2 -> id }}">

                        </div>
                        @endforeach
                        <div class="form-group">
                            <label class="col-form-label">Feed Back</label>
                            <input type="text" class="form-control" placeholder=" " name="feedback" required="" >

                        </div>




                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="FeedBack">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


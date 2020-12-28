@include('client.layouts.header-top')

@include('client.layouts.header-botom')
@include('client.layouts.menu')
	 <!-- //banner-2 -->
	 <!-- page -->
     @section('content')
    <ul class="w3_short">
		<li>
		<a href= "home">Trang Chủ</a>

		</li>
		<li>Đặt Phòng</li>
    </ul>


    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        <span>P</span>hòng của  {{ Auth::user()->name ?? ' ' }}
    </h3>




	<!-- //banner-2 -->
	<!-- page -->
		<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">

			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Bạn có {{ Cart::count() }} phòng đã đặt
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Số thứ tự</th>
								<th>Phòng</th>
								<th>Số lượng</th>
								<th>Tên phòng</th>

								<th>giá</th>
								<th>Hủy phòng</th>
							</tr>
						</thead>
						<tbody>

    <form action="{{ 'guidatphong' }}" method ="POST" class="creditly-card-form agileinfo_form">
                                @csrf

           <?php $i = 1; ?>
            @foreach ( $cart as $value )





							<tr class="rem1">
								<td class="invert">{{ $i }}</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="assets/client/images/{{ $value ->options->img }}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">

                                            <div class="form-group">

                                                <input type="fload" name="sl" class="form-control qty" placeholder="Số lượng" min="1" value="1">
                                            </div>


									</div>
								</td>
								<td class="invert">{{ $value ->name }}</td>
								<td class="invert">{{ $value ->price }} $</td>
								<td class="invert">
									<div class="rem">
										 <a class="fa fa-trash" href="{{ url('delete',['rowId' => $value ->rowId]) }}"> </a>
									</div>
								</td>
                            </tr>
                            <?php $i++ ;?>
             @endforeach

						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Vui lòng nhập ngày đến ngày đi</h4>

						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
                                    <label > Ngày đến:</label>

									<div class="controls form-group">
										<input type="date" name="ngayden" placeholder= "Ngày đến" required="">
                                    </div>
                                    <label > Ngày đi:</label>

									<div class="controls form-group">
										<input  type="date" name="ngaydi" placeholder="Ngày đến" required="">
                                    </div>

                                    <div class="controls form-group">
										<input  type="fload" name="slnguoilon" placeholder="Số lượng người lớn" required="">
                                    </div>

                                    <div class="controls form-group">
										<input  type="fload" name="sltreem" placeholder="Số lượng trẻ em" required="">
                                    </div>


                                    <div >
                                        <input type="text" name="ghichu" placeholder="Ghi chú cho khách sạn" >
                                    </div>


                                </div>



                                <button type="submit" name="submit">Đặt phòng </button>

							</div>
						</div>
	 </form>

				</div>
			</div>
		</div>
	</div>
    @include('client.layouts.duoi')




<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Hang Le | Hotel</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>

	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="assets/client/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="assets/client/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="assets/client/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	@include('client.layouts.index')

    <!-- // sửa -->


	<!-- //top-header -->

	<!-- header-bottom-->

	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->

	<!-- //navigation -->

	<!-- banner -->

	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>T</span>he
				<span>M</span>y
				<span>R</span>oom</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
                        <!-- first section -->



						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Hằng Lê Room</h3>
							<div class="row">
                             @foreach($phong as $thongtin)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="assets/client/images/{{ $thongtin -> loaiphong_images }}" class="img-fluid" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $thongtin->id}}.html" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a class="button btn" href="single.html">{{ $thongtin-> tenphong }}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{ $thongtin -> gia }} $</span>
												<del>$500</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<a @if(Auth::check()) href="{{ url('addcart',['id' => $thongtin -> id]) }}" @else href="#" data-toggle="modal" data-target="#exampleModal"  @endif  >Đặt phòng ngay</a>

											</div>
										</div>
									</div>
								</div>
                            @endforeach

							</div>
                        </div>

						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Dịch vụ đi kèm</h3>
							<div class="row">
                                @foreach ($dichvu as $ttdichvu )


								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img class="img-fluid" src="assets/client/images/{{ $ttdichvu -> dichvu_images }}" alt="">

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#">{{ $ttdichvu -> tendichvu }}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{ $ttdichvu -> gia }} vnđ</span>
												<del>$340.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<a href="{{ 'contact' }}">Liên hệ ngay</a>
											</div>
										</div>
									</div>
								</div>
                                @endforeach

							</div>
                        </div>

						<!-- //third section -->
						<!-- fourth section -->

						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				@include('client.layouts.right')
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->

	<!-- middle section -->

	<!-- footer -->

	<!-- //footer -->
	<!-- copyright -->

	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="assets/client/js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->

	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="assets/client/js/jquery.magnific-popup.js"></script>

	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="assets/client/js/minicart.js"></script>

	<!-- //cart-js -->

	<!-- password-script -->

	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="assets/client/js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="assets/client/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="assets/client/js/move-top.js"></script>
	<script src="assets/client/js/easing.js"></script>

	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
    <script src="assets/client/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/client/js/custom.js"></script>
    <script type="text/javascript" src="assets/client/js/ajax.js"></script>
	<!-- //for bootstrap working -->
    <!-- //js-files -->
    @include('client.layouts.duoi')
</body>

</html>

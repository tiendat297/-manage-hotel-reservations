
<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
    <base href="{{ asset('') }}">
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
    <link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/client/css/thongbao.css" rel="stylesheet" />
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
	<!-- top-header -->
	@include('client.layouts.header-top')


	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    @if (count($errors)>0)
                    @foreach($errors->all() as $error)
                       <strong> {{ $error }}</strong>

                    @endforeach

                @endif



                    <form action="{{ 'login' }}"  method="POST">
                        @csrf

						<div class="form-group">

							<label class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="username" >
                            @if ($errors -> has('username'))
                                <div class="alert alert-danger">
                                    {{ $errors -> first('username') }}

                                </div>
                            @endif

						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" >
                            @if ($errors -> has('password'))
                                <div class="alert alert-danger">
                                    {{ $errors -> first('password') }}

                                </div>
                            @endif

						</div>
						<div class="right-w3l">
							<button type="submit" name="submit" class="form-control">Đăng nhập </button>
						</div>

						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
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
                            @if ($errors -> has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors -> first('name') }}

                                </div>
                            @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">Địac chỉ email</label>
                            <input type="text" class="form-control" placeholder=" " name="email" required="">
                            @if ($errors -> has('email'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('email') }}

                            </div>
                        @endif
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
                            @if ($errors -> has('password'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('password') }}

                            </div>
                        @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="repassword" id="repassword" required="">
                            @if ($errors -> has('repassword'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('repassword') }}

                            </div>
                        @endif
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- //modal -->
    <!-- // sửa -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tài khoản</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <form action="{{ 'update' }}" method="post">
                        @csrf
                        @if (Auth::check())
						<div class="form-group">
							<label class="col-form-label">Họ và tên</label>
                            <input type="text" class="form-control" placeholder=" " name="name" value="{{ Auth::user() -> name }}" required="">
                            @if ($errors -> has('name'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('name') }}

                            </div>
                        @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">Địac chỉ email</label>
                            <input type="text" class="form-control" placeholder=" " name="email" value="{{ Auth::user() -> email }}" required="">
                            @if ($errors -> has('email'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('email') }}

                            </div>
                        @endif
                        </div>

                        <div class="form-group">
							<label class="col-form-label">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder=" " name="diachi"  value="{{ Auth::user() -> diachi }}" id="diachi" required="">
                            @if ($errors -> has('diachi'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('diachi') }}

                            </div>
                        @endif
                        </div>
                        <div class="form-group">
							<label class="col-form-label">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder=" " name="sdt" id="sdt" value="{{ Auth::user() -> sdt }}" required="">
                            @if ($errors -> has('sdt'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('sdt') }}

                            </div>
                        @endif
                        </div>
                        @endif

						<div class="form-group">
							<label class="col-form-label">Đổi mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password" required="">
                            @if ($errors -> has('password'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('password') }}

                            </div>
                        @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="repassword" id="repassword" required="">
                            @if ($errors -> has('repassword'))
                            <div class="alert alert-danger">
                                {{ $errors -> first('repassword') }}

                            </div>
                        @endif
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



    <!-- // sửa -->


	<!-- //top-header -->

	<!-- header-bottom-->
	@include('client.layouts.header-botom')
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	@include('client.layouts.menu')
	<!-- //navigation -->

	<!-- banner -->
    @include('client.layouts.slide')
    <!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			@yield('content')
		</div>
	</div>
	<!-- //banner -->

	<!-- top Products -->

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
	<!-- //for bootstrap working -->
    <!-- //js-files -->

</body>

</html>

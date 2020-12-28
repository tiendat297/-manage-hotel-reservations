<head>
	<title>Hang Le | Hotel</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <base href="{{ asset('') }}">
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
    <link href="assets/client/css/thongbao.css" rel="stylesheet" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
    <!-- //web fonts -->


</head>



<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Khách sạn Hằng Lê
                    <i class="fa fa-heart"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>

                    <li class="text-center border-right text-white">
                        <a @if(Auth::check()) href="{{ 'dondatphong' }}" @else href="#" data-toggle="modal" data-target="#exampleModal"  @endif  class="text-white">
                            <i class="fa fa-users"></i>TT Đặt Phòng</a>
                    </li>

                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> 09677 234 26
                    </li>
                   @if (Auth::check())

 <li class="text-center border-right text-white">
    <a data-toggle="modal" data-target="#exampleModal3" href="{{ 'update' }}"  class="text-white">
        <i class="fas fa-sign-in-alt mr-2"></i> {{ Auth::user() -> name }} </a>
</li>
<li class="text-center text-white">
    <a href="{{ url('logout') }}"  class="text-white">
        <i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất </a>
</li>
<li>
    @if (session('thongbao'))
    <div class="alert-box success"><span>Thông báo </span>{{ session('thongbao') }}</div>
                @endif
</li>

                @else
                <li class="text-center border-right text-white">
                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                        <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                </li>
                <li class="text-center text-white">
                    <a data-toggle="modal" data-target="#exampleModal2" class="text-white">
                        <i class="fas fa-sign-out-alt mr-2"></i>Đăng Kí </a>
                </li>
                <li>


                </li>
                   @endif

                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>



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



                <form action="{{ url('login') }}"  method="POST">
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

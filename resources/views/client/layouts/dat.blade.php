<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compattible" content="IE=edge">
		<title>Đăng nhập</title>
		<link rel="stylesheet" a href="Vidudautay\public\css\login.css">

	</head>
	<body>
        @if (count($errors)>0)
        @foreach($errors->all() as $error)
           <strong> {{ $error }}</strong>

        @endforeach

    @endif
    @if (session('thongbao'))
        <strong> {{ session('thongbao') }} </strong>
    @endif

		<form  method="POST" >
            @csrf

             <h1>Đăng Nhập</h1>
                <input placeholder="username" type="text" name="username">


                <input placeholder="password" type="password" name="password">




                 <button type="submit" name="submit">Đăng nhập </button>

  	 </form>

</body>
</html>


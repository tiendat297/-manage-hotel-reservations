<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginrequest;
use App\loaiphong;
use App\product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;
class controller_client extends Controller
{

     // đăng nhập
    public function trangchu()
     {
        return view('client.layouts.index');
     }

    public function postlogin(Request $request)
     {$this -> validate($request,[
         'username' => 'required|min:5|max:255',
         'password' => 'required|min:6|max:255',



    ],
    [
        'username.required' => 'Tên  không được bỏ trống',
        'username.min' => 'tên phải có tối thiểu 6 kí tự ',
        'username.max' => 'tên không quá 255 kí tự ',

        'password.required' => 'Mật khẩu không được bỏ trống',
        'password.min' => 'Mật khẩu phải có tối thiểu 6 kí tự ',
        'password.max' => 'Mật khẩu không quá 255 kí tự ',

    ]
    );

        $email = $request -> username;
        $password = $request -> password;

        if(Auth::attempt(['email' => $email, 'password' => $password]))
          {
            return redirect('home');
          }
          else
          {
            return redirect('home')  -> with('thongbao','Tài khoản không chính xác');
         }
     }
  // đăng xuất
     public function logout(){

        Auth::logout();
        return redirect('home'); // phải bỏ remember token hoặc thêm cột remember_token

    }


    public function postregister(Request $request)
     { $this -> validate($request,[

         'name' => 'required|min:2|max:255',
         'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:255',
        'repassword' => 'required|same:password',
        'diachi' => 'required',
        'sdt' => 'required',


     ],
     [
         'name.required' => 'Tên  không được bỏ trống',
         'name.min' => 'tên phải có tối thiểu 6 kí tự ',
         'name.max' => 'tên không quá 255 kí tự ',
         'email.required' => 'email không được bỏ trống',
         'email.unique' => 'đã tồn tại email trong hệ thống',
         'diachi.required' => 'Địa chỉ không bỏ trống',
         'sdt.required' => 'số điện thoại không bỏ trống',
         'password.required' => 'Mật khẩu không được bỏ trống',
         'password.min' => 'Mật khẩu phải có tối thiểu 6 kí tự ',
         'password.max' => 'Mật khẩu không quá 255 kí tự ',
         'repassword.required' => 'Mật khẩu không được bỏ trống',
         'password.same' => 'Nhập sai',
     ]
     );
     $data = $request -> all();
     $data['password'] = Hash::make($request -> password);
     $user = User::create($data);
     Auth::login($user);
     return back() ->with('thongbao','đăng kí tài khoản thành công');



     }
     public function contact(){
         return view('client.pages.contact');
     }

     // sửa thông tin
     public function postsua(Request $request)

       {$this -> validate($request,[

        'name' => 'required|min:2|max:255',
        'email' => 'required|email',
         'password' => 'required|min:6|max:255',
         'repassword' => 'required|same:password',
         'diachi' => 'required',
        'sdt' => 'required',


    ],
    [
        'name.required' => 'Tên  không được bỏ trống',
        'name.min' => 'tên phải có tối thiểu 6 kí tự ',
        'name.max' => 'tên không quá 255 kí tự ',
        'email.required' => 'email không được bỏ trống',

        'diachi.required' => 'Địa chỉ không bỏ trống',
        'sdt.required' => 'số điện thoại không bỏ trống',
        'password.required' => 'Mật khẩu không được bỏ trống',
        'password.min' => 'Mật khẩu phải có tối thiểu 6 kí tự ',
        'password.max' => 'Mật khẩu không quá 255 kí tự ',
        'repassword.required' => 'Mật khẩu không được bỏ trống',
        'password.same' => 'Nhập sai',
    ]
    );

        $id = (Auth::user() -> id);
        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> diachi = $request -> diachi;
        $user -> sdt = $request -> sdt;
        $user -> password = bcrypt($request -> password);
        $user -> save();
        return back() ;


       }
    //đổ dữ liệu sản phẩm
    public function index(){


       $data = DB::table('loaiphong') -> get();
       $dichvu = DB::table('dichvu') ->get();

       return view('client.pages.index',['phong' => $data],['dichvu' => $dichvu]);
    }

    public function search(Request $request){
        $ten = $request -> search;
        $data =   DB::table('loaiphong')->where('tenphong','like',$ten)->get();
        $dichvu = DB::table('dichvu') ->get();
        return view('client.pages.index',['phong' => $data],['dichvu' => $dichvu]);
    }
    public function under(){
        $data =   DB::table('loaiphong')->where('gia','<=',400)->get();
        $dichvu = DB::table('dichvu') ->get();
        return view('client.pages.index',['phong' => $data],['dichvu' => $dichvu]);

    }
    public function between(){
        $data =   DB::table('loaiphong')->where('gia','>=',400)->where('gia','<=',500)->get();
        $dichvu = DB::table('dichvu') ->get();
        return view('client.pages.index',['phong' => $data],['dichvu' => $dichvu]);

    }
    public function over(){
        $data =   DB::table('loaiphong')->where('gia','>=',500)->get();
        $dichvu = DB::table('dichvu') ->get();
        return view('client.pages.index',['phong' => $data],['dichvu' => $dichvu]);

    }

}

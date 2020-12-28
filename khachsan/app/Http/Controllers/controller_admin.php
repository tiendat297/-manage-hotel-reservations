<?php

namespace App\Http\Controllers;

use App\users;

use App\User;
use App\don_dat_phong;
use App\loaiphong;
use App\loaiphong_trangthietbi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class controller_admin extends Controller
{    // Quản lý đơn đặt phòng
   public function index(){
    if(Auth::check()){
    $data = DB::table('don_dat_phong') ->whereNull('tinhtrang') ->orderBy('id', 'desc')-> get();
    $data2 = DB::table('don_dat_phong') -> Where('tinhtrang','=','confirm')->orderBy('id', 'desc') ->  get();

    return view('admin.pages.index',compact('data'), compact('data2'));}
    else{
        return redirect('login');
    }
   }


   public function xoadatphong($madp){
    DB::table('don_dat_phong')-> where('id','=',$madp)-> delete();
    return back() -> with('thongbao','Xóa thành công');
   }

   public function suadatphong($madp){

    $data = DB::table('don_dat_phong')-> where('id','=',$madp) -> get();
    $data2 = DB::table('loaiphong') -> get();
    return view('admin.pages.suadp',compact('data'),compact('data2'));
   }
   public function luu(Request $request){
         $madp = $request -> id;
         $sl = $request -> sl;
         $tenkhachhang = $request -> tenkhachhang;
         $loaiphong_id = $request -> loaiphong_id;
         $ngayden = $request -> ngayden;
         $ngaydi = $request -> ngaydi;
         $slnguoilon = $request -> slnguoilon;
         $sltreem = $request -> sltreem;
         $tinhtrang = $request -> tinhtrang;
         $giatamtinh = $request -> giatamtinh;
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['sl'=>$sl]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['ngayden' => $ngayden]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['ngaydi'=>$ngaydi]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['slnguoilon'=>$slnguoilon]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['sltreem'=>$sltreem]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['tenkhachhang'=>$tenkhachhang]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['loaiphong_id'=>$loaiphong_id]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['giatamtinh'=>$giatamtinh]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['tinhtrang'=>$tinhtrang]);
         return back() ->with('thongbao','Sửa thành công');

   }
   public function themdatphong(Request $request){
    $don_dat_phong = new don_dat_phong();

        $don_dat_phong -> tenkhachhang = $request -> tenkhachhang;
        $don_dat_phong -> loaiphong_id = $request -> loaiphong_id;

        $don_dat_phong -> sl = $request -> sl;
        $don_dat_phong -> ngayden = $request -> ngayden;
        $don_dat_phong -> ngaydi = $request -> ngaydi;

        $don_dat_phong -> sltreem = $request -> sltreem;
        $don_dat_phong -> slnguoilon = $request -> slnguoilon;
        $don_dat_phong-> save();
        return back() ->with('thongbao','Thêm đơn đặt phòng thành công');
   }
   public function phongcheckin(){
    $data = DB::table('don_dat_phong') -> where('tinhtrang', '=', 'check in') -> get();
    $data2 = DB::table('don_dat_phong') -> Where('tinhtrang','=','check out') ->  get();
    return view('admin.pages.phongcheckin',compact('data'), compact('data2'));
   }

   // Quản lí phòng
    public function suaphong($id){
        $data = DB::table('loaiphong')-> where('id','=',$id) -> get();
        return view('admin\pages\suaphong', compact('data'));
    }
    public function postsuaphong(Request $request){
            $id = $request -> id;
            $tenphong = $request -> tenphong;
            $SLmax = $request -> SLmax;
            $dientich = $request -> dientich;
            $gia = $request -> gia;
            $mota = $request -> mota;
            DB::table('loaiphong')-> where('id','=',$id)-> update(['tenphong'=>$tenphong]);
            DB::table('loaiphong')-> where('id','=',$id)-> update(['SLmax'=>$SLmax]);
            DB::table('loaiphong')-> where('id','=',$id)-> update(['dientich'=>$dientich]);
            DB::table('loaiphong')-> where('id','=',$id)-> update(['gia'=>$gia]);
            DB::table('loaiphong')-> where('id','=',$id)-> update(['mota'=>$mota]);
            return back() -> with('thongbao' , 'Sửa thành công');

    }
    public function postthemphong(Request $request){
        // xử lí file ảnh
        $file1 = $request -> file('loaiphong_images');
        $file2 = $request -> file('phongtam');
        $file3 = $request -> file('phongkhach');
        $file4 = $request -> file('phongngu');
        $myfile1 = $file1 -> getClientOriginalName('loaiphong_images');
        $myfile2 = $file2 -> getClientOriginalName('phongtam');
        $myfile3 = $file3 -> getClientOriginalName('phongkhach');
        $myfile4 = $file4 -> getClientOriginalName('phongngu');

        $file1 -> move('assets/client/images',  $myfile1);
        $file2 -> move('assets/client/images',  $myfile2);
        $file3 -> move('assets/client/images',  $myfile3);
        $file4 -> move('assets/client/images',  $myfile4);



        $phong = new loaiphong();
        $phong -> tenphong = $request -> tenphong;
        $phong -> SLmax = $request -> SLmax;
        $phong -> dientich = $request -> dientich;
        $phong -> gia = $request -> gia;
        $phong -> mota = $request -> mota;
        $phong -> loaiphong_images = $myfile1;
        $phong -> phongtam = $myfile2;
        $phong -> phongngu = $myfile3;
        $phong -> phongkhach = $myfile4;
        $phong -> save();
        return back() ->with('thongbao','Thêm  phòng thành công');
    }


   // Quản lí phòng

    public function phong(){
        $data = DB::table('loaiphong')  -> get();
        return view('admin.pages.qlphong', compact('data'));
    }


    // Đăng nhập đăng xuất cho admin
    public function postlogin(Request $request){





            $email = $request -> username;
            $password = $request -> password;

            if(Auth::attempt(['email' => $email, 'password' => $password]))
              {
                return redirect('admin_index');
              }
              else
              {
                return back();
             }


        }

        public function logout(){

            Auth::logout();
            return redirect('login'); // phải bỏ remember token hoặc thêm cột remember_token

        }

    // quản lí khách hàng
    public function qlkhachhang(){
        $data = DB::table('users')  -> get();
        return view('admin.pages.qlkhachhang', compact('data'));
    }

    public function trangthietbi(){
        $trangthietbi = DB::table('loaiphong')
    ->join('loaiphong_trangthietbi', 'loaiphong.id', '=', 'loaiphong_trangthietbi.loaiphong_id')
    ->join('trangthietbi', 'loaiphong_trangthietbi.trangthietbi_id', '=', 'trangthietbi.id')->orderBy('loaiphong_id', 'ASC')
    ->get();

    return view('admin.pages.trangtb', compact('trangthietbi'));
    }

    public function postttb(Request $request){
        $ttb = new loaiphong_trangthietbi();
        $ttb -> loaiphong_id = $request -> loaiphong_id;
        $ttb -> trangthietbi_id = $request -> trangthietbi_id;
        $ttb -> sl = $request -> sl;
        $ttb -> save();
        return back() -> with('thongbao', 'Thêm thiết bị thành công');
    }

    public function xoattb(Request $request){
        $loaiphong_id = $request -> loaiphong_id;
        $trangthietbi_id = $request -> trangthietbi_id;
        DB::table('loaiphong_trangthietbi')-> where('loaiphong_id','=',$loaiphong_id) ->where('trangthietbi_id','=',$trangthietbi_id) -> delete();
        return back() -> with('thongbao', 'Xóa trang thiết bị thành công');
    }
    public function suakhachhang($id){
        $data = DB::table('users')-> where('id','=',$id) -> get();
        return view('admin.pages.suakh', compact('data'));
    }
    public function postkh(Request $request){
        $id = $request -> id;
        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> diachi = $request -> diachi;
        $user -> sdt = $request -> sdt;
        $user -> password = bcrypt($request -> password);
        $user -> save();
        return back() ;
    }

}

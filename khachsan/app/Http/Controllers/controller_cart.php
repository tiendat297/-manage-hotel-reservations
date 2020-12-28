<?php

namespace App\Http\Controllers;

use App\don_dat_phong;
use App\loaiphong;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Stmt\Foreach_;

class controller_cart extends Controller
{

    public function index(){
        $cart = Cart::content();
        return view('client.pages.card', compact('cart'));
    }

    public function addcart($id,Request $request){

        $phong = loaiphong::find($id);
        if($request -> qty){
            $qty = $request -> qty;

        }else{
            $qty = 1;
        }
        $gia = $phong -> gia;
        $cart = ['id' =>$phong ->id, 'name' => $phong -> tenphong, 'qty'=> $qty,'price'=> $gia,'weight' => 0,'options' => ['img' => $phong ->loaiphong_images] ];
        Cart::add($cart);
        session() -> flash('thongbao','Bạn đã đặt'.$phong ->tenphong.'thành công');
        return redirect('giohang');


    }
    public function delete($rowId,Request $request )
    {
        Cart::remove($rowId);
        return back()->with('thongbao','đã xóa thành công');
    }

    public function chitietphong($id)
    {  $thietbi = DB::table('trangthietbi')-> join('loaiphong_trangthietbi','trangthietbi.id','loaiphong_trangthietbi.trangthietbi_id')->select('loaiphong_trangthietbi.sl','tenthietbi')->where('loaiphong_id','=',$id)->get();
        $chitiet = DB::table('loaiphong') -> where('id','=',$id)->get();
        return view('client.pages.chitietphong',['tb' => $thietbi, 'ct' => $chitiet]);
    }


    public function guidatphong(Request $request){
        $khachhang_id = (Auth::user() -> id);
        $tenkhachhang= (Auth::user() -> name);
        $sdt = Auth::user() -> sdt;
        $cart = Cart::content();

        foreach($cart as $phong){


        $don_dat_phong = new don_dat_phong();
        $don_dat_phong -> khachhang_id = $khachhang_id;
        $don_dat_phong  -> tenkhachhang = $tenkhachhang;
        $don_dat_phong -> loaiphong_id = $phong -> id;
        $don_dat_phong -> tenphong = $phong -> name;
        $don_dat_phong -> sdt = $sdt;
        $don_dat_phong -> sl = $request -> sl;
        $don_dat_phong -> ngayden = $request -> ngayden;
        $don_dat_phong -> ngaydi = $request -> ngaydi;
        $don_dat_phong -> ghichu = $request -> ghichu;
        $don_dat_phong -> giatamtinh = $phong -> price;
        $don_dat_phong -> sltreem = $request -> sltreem;
        $don_dat_phong -> slnguoilon = $request -> slnguoilon;

        $don_dat_phong-> save();
        }
        session() -> flash('thongbao','Bạn đã đặt thành công');
        Cart::destroy();
        return redirect('dondatphong');

    }
    public function dondatphong(){
        $khachhang_id = (Auth::user() -> id);
        $data = DB::table('don_dat_phong') -> where('khachhang_id','=',$khachhang_id)  -> get();

        $data2 = DB::table('don_dat_phong') ->  where('khachhang_id','=',$khachhang_id)-> where('tinhtrang', '=','check out') -> get();
        return view('client.pages.datphong',compact('data'),compact('data2'));
    }

    public function suadatphong(Request $request){
         $madp = $request -> madp;
         $sl = $request -> sl;
         $ngayden = $request -> ngayden;
         $ngaydi = $request -> ngaydi;
         $slnguoilon = $request -> slnguoilon;
         $sltreem = $request -> sltreem;
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['sl'=>$sl]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['ngayden' => $ngayden]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['ngaydi'=>$ngaydi]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['slnguoilon'=>$slnguoilon]);
         DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['sltreem'=>$sltreem]);
        return back();
    }
    public function xoadatphong($madp){
        DB::table('don_dat_phong')-> where('id','=',$madp)-> delete();
        return back();
    }
    public function postfeedback(Request $request){
        $madp = $request -> madp;
        $feedback = $request -> feedback;
        DB::table('don_dat_phong')-> where('id','=',$madp)-> update(['feedback'=>$feedback]);
        return back()-> with('thongbao','Feedback thành công, XIN CẢM ƠN ');
    }




}

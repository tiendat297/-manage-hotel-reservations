<?php

use App\Http\Controllers\controller_client;
use App\loaiphong;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// đăng nhập. đăng xuất

Route::post('login', 'controller_client@postlogin');
Route::get('logout','controller_client@logout');
// Đăng kí tài khoản
Route::post('register', 'controller_client@postregister');
// sửa thông tin
Route::post('update', 'controller_client@postsua');



// đổ dữ liệu

Route::get('home','Controller_client@index');
Route::resource('cart','controller_cart');
// thêm phòng
Route::get('addcart/{id}', 'controller_cart@addcart');

Route::get('giohang','controller_cart@index');
// xóa phòng
Route::get('delete/{rowId}','controller_cart@delete');

Route::get('{id}.html', 'controller_cart@chitietphong');


Route::post('guidatphong','controller_cart@guidatphong');
Route::get('dondatphong', 'controller_cart@dondatphong');
Route::get('abouts', function () {
    return view('client\pages\abouts');

});
Route::post('suadatphong', 'controller_cart@suadatphong');
Route::get('xoadatphong/{madp}', 'controller_cart@xoadatphong');
Route::get('suaphongindex', 'controller_cart@suaphongindex');
Route::post('postfeedback', 'controller_cart@postfeedback');
// Admin route
// Đơn đặt phòng
Route::get('admin_index', 'controller_admin@index');
Route::get('xoadatphong_admin/{madp}','controller_admin@xoadatphong');
Route::get('suadatphong_admin/{madp}','controller_admin@suadatphong');
Route::post('luudatphong','controller_admin@luu');
Route::post('themdatphong', 'controller_admin@themdatphong');
Route::get('phongcheckin','controller_admin@phongcheckin');
// chỉnh sửa phòng
Route::get('admin_phong', 'controller_admin@phong');
Route::get('suaphong/{id}','controller_admin@suaphong');
Route::post('postsuaphong', 'controller_admin@postsuaphong');
Route::post('postthemphong','controller_admin@postthemphong');
Route::get('adminlogin','controller_admin@adminlogin');

Route::get('login', function () {
return view('admin.pages.login');});
Route::post('admin_login', 'controller_admin@postlogin');
Route::get('admin_logout', 'controller_admin@logout');
Route::get('qlkhachhang','controller_admin@qlkhachhang');
Route::get('trangthietbi', 'controller_admin@trangthietbi');
Route::post('postttb', 'controller_admin@postttb');
Route::post('xoattb', 'controller_admin@xoattb');
Route::get('suakhachhang/{id}', 'controller_admin@suakhachhang');
Route::post('postkh','controller_admin@postkh');

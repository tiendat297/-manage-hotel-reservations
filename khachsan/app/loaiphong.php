<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiphong extends Model
{
    protected $table = 'loaiphong';
    public $timestams = false;
    public function trangthietbi()
     {
        return $this->belongsToMany('App\trangthietbi', 'loaiphong_trangthietbi', 'loaiphong_id','trangthietbi_id'); //tên bảng liên kết, tên bảng trung gian, khóa chính, khóa chính

     }
}

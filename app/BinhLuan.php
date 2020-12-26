<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BinhLuan extends Model
{
    protected $table = 'binhluan';
    

    public static function check($makh,$msp){
        $hoadon = DB::table('hoadon')->join('chitiethoadon','hoadon.mahoadon','=','chitiethoadon.mahoadon')->where([['makhachhang','=',$makh],['masanpham','=',$msp]])->get();
        
        if(count($hoadon) > 0)
            return 1;
        return 0;
        
    }

    public static function getBinhLuan($masp){
        return $binhluan = DB::table('binhluan')->join('khachhang','binhluan.makhachhang','=','khachhang.chungminhnhandan')->where('binhluan.masanpham','=',$masp)->get();
    }
    
}

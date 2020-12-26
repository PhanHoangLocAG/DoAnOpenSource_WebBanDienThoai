<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class YeuThich extends Model
{
    protected $table='yeuthich';
    protected $primaryKey='makhachhang';
    protected $keyType='String';


    public static function getSanPham($id){
      return  DB::table('yeuthich')->join('sanpham','yeuthich.masanpham','=','sanpham.masanpham')->where('yeuthich.makhachhang','=',$id)->get();
    }

    public static function getKhachHang($makh){
        return DB::table('yeuthich')->where('makhachhang','=',$makh)->get();
    }

    public static function isExist($makh,$masp){
        $yt=YeuThich::getKhachHang($makh);
        if($yt!=null){
            foreach($yt as $item){
                if($item->masanpham==$masp){
                    return true;
                }
            }
        }
        return false;
    }
}

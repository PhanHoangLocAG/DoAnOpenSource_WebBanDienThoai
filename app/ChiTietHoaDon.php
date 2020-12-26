<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cart;
class ChiTietHoaDon extends Model
{
    protected $table = 'chitiethoadon';

    public static function getData($id){
        $hoadon = DB::table('hoadon')->where([['makhachhang','=',$id],['thanhtoan','=',1]])->orderByDesc('created_at')->get();
        //Lay chi tiet hoa don
        if($hoadon != null){
            
            $ob = array();//ob == hoadon
            foreach($hoadon as $item){
                
                $sanpham = DB::table('chitiethoadon')->where('mahoadon','=',$item->mahoadon)->get();
                if($sanpham != null){
                    $tongtien = 0;
                    foreach($sanpham as $item1){
                        $tongtien += $item1->thanhtien;
                    }
                    if($item->phuongthucgiaohang == 1){
                        $tongtien += 30000;
                    }
                    $ob[] = [
                        'hoadon' => $item,
                        'sanpham' => $sanpham,
                        'tongtien' => $tongtien
                    ];
                }
            }
           // dd($ob);
            return $ob;
        }
        return null;
    }
    //xoa chi tiet hoa don co id hoa don
    public static function getHoaDon($masp){
        return DB::table('chitiethoadon')->where('masanpham','=',$masp)->groupBy(['masanpham'])->select(DB::raw("SUM(soluong) as soluong"))->get();
    }
}

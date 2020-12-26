<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HoaDon extends Model
{
    protected $table='hoadon';
    protected $primaryKey='mahoadon';
    protected $keyType='String';


    public static function getId($id){
        return DB::table('hoadon')->where('makhachhang','=',$id)->orderByDesc('created_at')->first();
    }

    public static function getInvoice(){
        return DB::table('hoadon')->join('chitiethoadon','hoadon.mahoadon','=','chitiethoadon.mahoadon')->where('hoadon.thanhtoan','=',1)->groupBy(['hoadon.mahoadon','hoadon.tenkhachhang','hoadon.email','hoadon.sodienthoai','hoadon.manhanvien','hoadon.created_at','hoadon.thanhtoan'])->select('hoadon.mahoadon','hoadon.tenkhachhang','hoadon.email','hoadon.sodienthoai','hoadon.manhanvien','hoadon.created_at','hoadon.thanhtoan',DB::raw("SUM(thanhtien) as thanhtien"))->get();
    }

    public static function getInvoiced(){
        return DB::table('hoadon')->join('chitiethoadon','hoadon.mahoadon','=','chitiethoadon.mahoadon')->groupBy(['hoadon.mahoadon','hoadon.tenkhachhang','hoadon.email','hoadon.sodienthoai','hoadon.manhanvien','hoadon.created_at','hoadon.thanhtoan'])->select('hoadon.mahoadon','hoadon.tenkhachhang','hoadon.email','hoadon.sodienthoai','hoadon.manhanvien','hoadon.created_at','hoadon.thanhtoan',DB::raw("SUM(thanhtien) as thanhtien"))->get();
    }
}

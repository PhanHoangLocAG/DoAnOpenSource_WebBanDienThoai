<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $primaryKey='masanpham';
    protected $keyType='String';

    //get list discount product
    public static function getdiscount(){
         return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }

    //get list product search
    public static function getListProductSearch($name){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.tensanpham','like',"%$name%")->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }
    //get list product type
    public static function getListProductType($ten,$name){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.loaisanpham','=',$name],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }
    //get list product price
    public static function getListProductPrice($ten,$gia){
        if($gia == 1){
            return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.giaban','<',5000000],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
        }else if($gia == 2){
            return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.giaban','>=',5000000],['sanpham.giaban','<=',10000000],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();
        }else if($gia == 3){
            return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.giaban','>=',10000000],['sanpham.giaban','<=',20000000],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();
        }else if($gia == 4){
            return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.giaban','>',20000000],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();
        }
    }
    //get list product discount
    public static function getListProductDiscount($ten){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['discount','!=',null],['sanpham.tensanpham','like',"%$ten%"]])->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }

    //get list product price hight to low
    public static function getProductHightToLow($ten){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.tensanpham','like',"%$ten%"]])->orderByDesc('sanpham.giaban')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }
   //get list product price low to hight
   public static function getProductLowToHight($ten){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.tensanpham','like',"%$ten%"]])->orderBy('sanpham.giaban','ASC')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }
    //get list product new search
    public static function getNewProductName($ten){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where([['sanpham.tensanpham','like',"%$ten%"]])->orderByDesc('created_at')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','sanpham.created_at','discount','Money_discount')->limit(10)->get();
    }
    //san pham moi
    public static function getNewProduct(){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->orderByDesc('created_at')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','sanpham.created_at','discount','Money_discount')->limit(10)->get();
    }

    //get detail product discount
    public static function getDetailProduct($ma){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.masanpham','=',$ma)->select('sanpham.*','discount.Money_discount','discount.discount')->get();
    }

    //get detail product
    public static function getDetailProductDefault($ma){
        $khachhang= DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.masanpham','=',$ma)->select('sanpham.*','discount.Money_discount','discount.discount')->get();
        return $khachhang;
    }

    public static function getMauSac($name){
        return DB::table('sanpham')->where('sanpham.tensanpham','=',$name)->get();
    }
}

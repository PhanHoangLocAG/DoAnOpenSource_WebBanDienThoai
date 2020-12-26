<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NhanVien extends Model
{
    protected $table='nhanvien';
    protected $primaryKey='manhanvien';
    protected $keyType='String';

    public static function getAccountAdmin(){
        $admin=DB::table('nhanvien')->where('chucvu','=','Admin')->get();
        return $admin;
    }
}

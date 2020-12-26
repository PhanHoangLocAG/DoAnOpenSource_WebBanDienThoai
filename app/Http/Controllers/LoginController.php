<?php

namespace App\Http\Controllers;

use App\KhachHang;
use App\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//Call Form Login
    {
        return view('admin.login');
    }

    public function logout(){
        Cookie::queue(Cookie::forget('name'));
        Cookie::queue(Cookie::forget('pass'));
        return view('admin.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Dang nhap
    {
        $nhanvien=NhanVien::getAccountAdmin();
        //dd($nhanvien);
        foreach($nhanvien as $item){
            if($item->email==$request->email && $item->password==md5($request->password))
            {
                Cookie::queue('pass',md5($request->password),3600);
                Cookie::queue('name',$request->email,3600);
                return view('admin.dashboard');
            }
        }
        return redirect('admin/login')->with('thongbao','Email hoặc password không chính xác');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

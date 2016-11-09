<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail, DB;

class HomeController extends Controller
{
    public function mail(){
    	$user['email']='nguyenquocmanh4792@gmail.com';//$request->email nhan email tu form
    	$user['name'] ='tuan nguyen';
    	Mail::send('reminder',['user'=>$user], function($m) use ($user){
    		$m->to($user['email'], $user['name'])->subject('test email');
    		echo 'gui email thanh cong';
    	});
    public function themSP($id){
    	$soluong = 1;
    	$arr=[
    		$id=>$soluong
    	];
    	Session::put('giohang',$arr);
    	return redirect()->intended();
    }
    public function
    }

}

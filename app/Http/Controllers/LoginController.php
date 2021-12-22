<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        # code...
        return view("login");
    }
    public function actionlogin(Request $request)
    {
    	$this->validate($request,
 
            ['email'=>'required'],
 
            ['password'=>'required']
            
        );
 
        $user = $request->input('email');
        $pass = $request->input('password');        
 
        $users = DB::table('admin')->where(['email'=> $user])->first();
        
                if(count(array($users))==0){
        
                   return redirect('/login')->with('failed','Login gagal');
        
                } else
               
                if($users->email == $user AND $users->password = $pass){
                    
                   Session::put('login', 'Selamat anda berhasil login');
                   return redirect('/admin');
        
                } else {
                     
                   return redirect('/login')->with('failed','Login gagal');
          
                }
    }
    public function logout()
    {
        # code...
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}

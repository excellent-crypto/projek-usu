<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessioncontroller extends Controller
{
    function index(){

return view('session.index');


    }





    function login(Request $request){
        //validasi login
        $request->validate([
'email'=>'required',
'pass'=>'required'

        ]);
        //peniriman data login
        $data = [
            'email'=>$request->email,
            'password'=>$request->pass,
        ];
        //proses login
        if(Auth::attempt($data)){
           return redirect()->to('/admin')->with('berhasil', 'berhasil login');
        }else{
            //salah kemba;o
           return redirect()->to('/session');
        }

      
        }
        //proses log ou
        function logout(){
            Auth::logout();
        return redirect()->to("/session")->with("logout","berhasil logout");
    }

    function home () {
        $data = Worker::all();
        return view('index', compact('data'));
    }
}

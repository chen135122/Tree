<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function getLogin(){
        return view('admin.home.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|min:6|email|unique:users',
            'password' => 'required|min:6|max:20',
        ]);
        $user = User::where('email',$request->get('email'))->first();
        if($user){
            if(Hash::check($request->get('password'),$user->password)){

            }

        }else{
            return redirect()->back()->withInput()->with('msg','该邮箱不存在！');
        }

    }
}

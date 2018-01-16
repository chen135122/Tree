<?php

namespace App\Http\Controllers\Admin;


use App\Mail\ForgetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
            'email' => 'required|min:6|email',
            'password' => 'required|min:6|max:20',
        ]);
        $user =User::where('email',$request->get('email'))->first();
        if($user){
            if(Hash::check($request->get('password'),$user->password)){
                Auth::login($user);
                return view('admin.home.index');
            }
        }else{
            return view('admin.home.login');
        }

    }

    public function test(){
        return Hash::make('123456');
    }

    public function forgetPassword(){
        return view('admin.home.forget');
    }
    public function forgetPasswordPost(Request $request){
        $user = User::where('email',$request->get('email'))->first();
        Mail::to($user)->send(new ForgetPassword($user));
//        dd($user->remember_token);
//        dd($request->all());
    }

    public function resetPassword($email,$token){
        return view('admin.home.reset',compact('email','token'));
    }

    public function reset(Request $request){
        $result = User::where([
            'email' => $request->get('email'),
            'remember_token' => $request->get('token')
        ])->update([
            'password' => Hash::make($request->get('password')),
            'remember_token' => str_random(10)
        ]);
        if($result){
            return view('admin.home.login');
        }else{
            return view('errors.404');
        }
//        dd($result);
//
//        dd($request->all());
    }

    public function upload(Request $request){
//        dd($request->file('upload'));
        $request->file('upload')->store('files');
//        dd($request->all());
    }
}

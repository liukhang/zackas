<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterReqeust;
use Auth,DB,Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function postRegister(RegisterReqeust $request){
        $thanhvien = new User;
        $thanhvien->username = $request->input('name');
        $thanhvien->email = $request->input('email');
        $thanhvien->password = Hash::make($request->input('password'));
        $thanhvien->remember_token = $request->input('_token');
        $thanhvien->save();
    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request){
        // $auth = [
        //     'username' => $request->input('username'),
        //     'password' => $request->input('password'),
        //     'level' => 1
        // ];
        //$checks = DB::table('users')->select('email','password')->where($auth)->first();
        if(Auth::attempt([ 'username' => $request->input('username'),'password' => $request->input('password') ])){
            return redirect()->route('admin');
        }
        elseif (Auth::attempt([ 'email'=> $request->input('username'),'password' => $request->input('password') ]))
        {
             return redirect()->route('admin');
        } 
        else{
           return redirect()->back()->withInput()->withErrors(['username' => 'username email hoặc password không đúng']);
        };
    }
}

<?php
namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use Validator;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Auth,DB,Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
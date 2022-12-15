<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use \Illuminate\Support\Facades\DB;
use Illuminate\Http\isMethod;
use \Illuminate\Support\Facades\Validator;
use App\Models\Video;


class AuthController extends Controller
{
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->name = $request->name;
                $newUser->email = $request->email;

                $newUser->password = Hash::make($request->password);


            $newUser->save();
                return redirect()->route('login')->with('message', 'create account success!');
            } else {
                return redirect()->route('login')->with('message', 'Account exist!');
            }
        }
    }

    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }










    public function postLogin(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->type == 'admin') {
                $videos = Video::all();
                    return view('list-video', compact('videos'));
            } else {
        
                $videos = video::all();
                $result['home-login'] = DB::table('videos')->get()->toArray();
        
                return view('home-login', compact('videos'), $result);
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function done(){
        return view('thankpage');

    }




    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function home()
    {
        $videos = Video::all();

        return view('index', compact('videos'));
    }

    public function homeLogin()
    {
        $videos = Video::all();

        return view('home-login', compact('videos'));
    }

    public function checkout($id){
        $video = Video::find($id);
        return view('checkout', ['video' => $video]);

    }

    public function Orderstore(Request $request){
       
            $videos = Video::find($request->id);
            return view('checkout',compact('videos'));

        
    }
}

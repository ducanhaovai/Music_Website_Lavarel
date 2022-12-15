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

class AdminController extends Controller
{
    
    public function showAdminLogin(){
        return view('AdminLogin');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    // public $username;
    // public $password;

    // public function __construct($username, $password)
    // {
    //     $this->username = $username;
    //     $this->password = $password;
    // }
    
    public function index()
    {
        return view("login");
    }

    public function viewRegister()
    {
        return view('daftar_akun');
    }

    public function auth(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $getUser = User::where('username', $username)->get();

        if($getUser->username == $username && $getUser->password == $password){
            return true;
        } else {
            return false;
        }

    }

}

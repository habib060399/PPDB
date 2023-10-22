<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $getUser = User::where('username', $username)->first();
        
        if($getUser){
            if($getUser->password == $password){
                $request->session()->regenerate();
                if($getUser->role == "1"){
                    $request->session()->put('username', $getUser->username);
                    $request->session()->put('nama', $getUser->nama);

                    return redirect('/admin');
                } else {
                    $request->session()->put('username', $getUser->username);
                    $request->session()->put('nama', $getUser->nama);
                    
                    return redirect('/user');
                }
                
            } else {
                return redirect('/')->with('status', 'Username dan Password salah');
            }
        } else {
            return redirect('/')->with('status', 'Username dan Password salah');
        }

    }

    public function daftarAkun(Request $request)
    {
        $username = $request->input('username');
       
        $request->validate([
            'username' => 'required|unique:users'
        ]);

        $messages = ['username.required' => 'username sudah ada'];

        $user = User::create([
            'nama' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => '2'
        ]);

        $user->save();
        return redirect('/')->with('status', 'akun berhasil di daftarkan');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        
    }


}

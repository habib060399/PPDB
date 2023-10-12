<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    
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

        $getUser = User::where('username', $username)->first();
        
        if($getUser){
            if($getUser->password == $password){

                if($getUser->role == "1"){
                    return redirect()->to("admin");
                } else {
                    return redirect()->to("user");
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
        $getUser = User::where('username', $username);

        if($getUser->username == $username){
            return redirect('/')->with('status', 'Username sudah ada');
        }
        
        $user = User::create([
            'nama' => $request->input("name"),
            'username' => $username,
            'password' => $request->input("password"),
            'role' => "2"
        ]);

        $user->save();
        return redirect('/')->with('status', 'Akun berhasil didaftarkan');
    }

}

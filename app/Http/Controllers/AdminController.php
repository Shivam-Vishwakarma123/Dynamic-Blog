<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function makelogin(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        $username = $request->usename;
        $password = $request->passwrd;

        $admin = DB::table('admins')->where('username', $username);

        if($admin && password_verify($password, $admin->password)){
            return 'yes';
        }
        if($admin && $password === $admin->password){
            return 'ywwwes';
        }
    }
}

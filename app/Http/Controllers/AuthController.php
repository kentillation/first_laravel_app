<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages/index');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => md5($request->password)
        ];

        $result_count = UsersModel::where($credentials)->get()->count();
    
        if ($result_count > 0) {
            //Schema::drop('tbl_stocks');
            return redirect('/dashboard')->with('success', 'Login Success');
        }
        return back()->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pages/index');
    }

    public function signup () 
    {
        return view('pages/signup');
    }
    
    //CREATING RECORD
    public function save_user(Request $request)
    {
        $users = new UsersModel;
        $request->password = md5($request->password);
        
        $users->name = $request->name;
        $users->fb_name = $request->fb_name;
        $users->age = $request->age;
        $users->address = $request->address;
        $users->contact = $request->contact;
        $users->email = $request->email;
        $users->username = $request->username;
        $users->password = $request->password;
        $users->remember_token = $request->remember_checkbox;
        $users->save();

        //return redirect(route('index'));
        return back()->with('success', 'An account has been saved successfully');
    }

}

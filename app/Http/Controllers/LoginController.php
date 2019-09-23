<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\dangkiRequest;
use App\Http\Requests\loginRequest;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function getLogout()
    {
        Auth::logout();
        return back();
    }

    public function getDangki()
    {
        # code...
        return view('dangki');
    }

    public function postDangki(dangkiRequest $request)
    {
        # code...
        $user = new User;
        $user->email = $request->emaildk;
        $user->name = $request->name;
        $user->password = bcrypt($request->passwordk);
        $user->level = 0;
        $user->save();
        return redirect('login')->with('success', 'Tạo tài khoản thành công');
    }

    public function postLogin(loginRequest $re)
    {
        # code...
        if ($re->remember = "re") {
            # code...
            $rem = true;
        } else {
            # code...
            $rem = false;
        }

        if (Auth::attempt(['email' => $re->email, 'password' => $re->password], $re)) {
            # code...
            return redirect('/');
        } else {
            return back()->with('error', 'Email hoặc mật khẩu không đúng!');
        }

        // if (Auth::attempt(['email' => $re->email, 'password' => $re->password,'level' => 1],$re)) {
        // 	# code...
        // 	return redirect()->intended('admin/home');
        // } elseif (Auth::attempt(['email' => $re->email, 'password' => $re->password,'level' => 0],$re)) {
        //        # code...
        //        return redirect()->intended('/');
        //        // return back();
        //    } else {
        // 	# code...
        //        // Session::flash('error', 'Email hoặc mật khẩu không đúng!');
        //        return back()->with('error', 'Email hoặc mật khẩu không đúng!');
        // }
    }
}

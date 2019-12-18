<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\dangkiRequest;
use App\Http\Requests\EditUserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUser()
    {
        $data['users'] = User::where('level', 0)->orderBy('id', 'desc')->get();
        return view('admin.user', $data);
    }

    public function postUser(dangkiRequest $request)
    {
        $user = new User;
        $user->email = $request->emaildk;
        $user->name = $request->name;
        $user->password = bcrypt($request->passwordk);
        $user->level = 0;
        $user->save();
        return redirect('admin/user')->with('success', 'Thêm User thành công');
    }

    public function getEditUser($id)
    {
        $data['user'] = User::find($id);
        return view('admin.edituser', $data);
    }

    public function postEditUser(EditUserRequest $request, $id)
    {
        $user = User::find($id);
        // $user->email = $request->email;
        $user->name = $request->name;
        if (($request->password) <> null) {
            $user->password = $request->password;
        }
        $user->save();
        return redirect('admin/user')->with('success','Thay đổi user thành công');
    }

    public function getDeleteUser($id)
    {
        User::destroy($id);
        return back()
            ->with('success','Xoá user thành công');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function test()
    {
        $users = User::all()->where('role', '=', '2');

        $renderUser = view('admin.render', compact('users'))->render();

        return response()->json(array(
            'html' => $renderUser,
        ));
    }

    public function userIndex()
    {
        return view('admin.user');
    }

    public function dashboardIndex()
    {
        return view('admin.dashboard');
    }

    public function renderMap()
    {
        $users = User::select()->get();
        return $users;
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            //data
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {
            $user = new User;
            //user data
            $user->save();
            return response()->json([
                'status' => 200,
                'message' => 'New User Stored'
            ]);
        }
    }

    public function editUser($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'status' => 200,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'This User Not Exist '
            ]);
        }
    }

    public function updateuser(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            //data
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validate->errors(),
            ]);
        } else {
            $user = User::find($id);
            if ($user) {
                //data
                $user->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'User',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'User Not Found'
                ]);
            }
        }
    }

    public function deleteuser($id)
    {
        $deleteUser = User::find($id)->delete();
        $deleteUser;
        return response()->json([
            'status' => 200,
            'message' => 'This User Deleted',
        ]);
    }
}

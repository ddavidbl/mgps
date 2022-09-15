<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function ikon($id)
    {
        $ikon = Category::find($id);
        if ($ikon) {
            return response()->json([
                'status' => 200,
                'ikon' => $ikon,
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'kategori tidak ditemukan',
            ]);
        }
    }

    public function userList()
    {
        $users = User::all()->where('role', '=', '2');

        $renderUser = view('admin.render', compact('users'))->render();

        return response()->json(array(
            'html' => $renderUser,
        ));
    }

    public function userIndex()
    {
        $kategoris = Category::all();
        return view('admin.user', compact('kategoris'));
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

    public function newUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|min:5',
            'password' => 'required|min:8',
            'nomor_registrasi' => 'required|string|max:8|min:3',
            'nama_pemilik' => 'required|string|max:40|min:3',
            'alamat' => 'required|string|min:5',
            'merk' => 'required|string|min:3',
            'tipe' => 'required|string|min:3',
            'jenis' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'tahun_pembuatan' => 'required',
            'nomor_rankaian' => 'required',
            'nomor_mesin' => 'required',
            'warna' => 'required|string',
            'warna_tnkb' => 'required|string',
            'bahan_bakar' => 'required|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {
            $user = new User;
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->nomor_registrasi = $request->input('nomor_registrasi');
            $user->nama_pemilik = $request->input('nama_pemilik');
            $user->alamat = $request->input('alamat');
            $user->merk = $request->input('merk');
            $user->tipe = $request->input('tipe');
            $user->jenis = $request->input('jenis');
            $user->model = $request->input('model');
            $user->tahun_pembuatan = $request->input('tahun_pembuatan');
            $user->nomor_rangkaian = $request->input('nomor_rangkaian');
            $user->nomor_mesin = $request->input('nomor_mesin');
            $user->warna = $request->input('warna');
            $user->warna_tnkb = $request->input('warna_tnkb');
            $user->bahan_bakar = $request->input('bahan_bakar');
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

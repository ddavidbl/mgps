<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Service;
use App\Models\Servicelog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function viewUser($id)
    {
        $user = User::find($id);

        return response()->json([
            'status' => 200,
            'user' => $user,
        ]);
    }

    public function log($id)
    {
        $log_data = Servicelog::select('id', 'catatan_servis')->where('id_kendaraan', $id)->get();
        return response()->json([
            'status' => 200,
            'log' => $log_data,
        ]);
    }

    public function userList()
    {
        $users = User::all();

        $renderUser = view('admin.render', compact('users'))->render();

        return response()->json(array(
            'html' => $renderUser,
        ));
    }

    public function userIndex()
    {
        return view('admin.user');
    }

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
            'username' => 'required|min:5|string',
            'password' => 'required|min:8',
            'nomor_registrasi' => 'required|string|max:8|min:3',
            'nama_pemilik' => 'required|string|max:40|min:3',
            'alamat' => 'required|string|min:5',
            'merk' => 'required|string|min:3',
            'tipe' => 'required|string|min:3',
            'jenis' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'tahun_pembuatan' => 'required',
            'nomor_rangkaian' => 'required',
            'nomor_mesin' => 'required',
            'warna' => 'required|string',
            'warna_tnkb' => 'required|string',
            'bahan_bakar' => 'required|string',
            'kategori' => 'required',
            'path' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {
            $user = new User;
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
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
            $user->kategori = $request->input('kategori');
            $user->path = $request->input('path');
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
            'nomor_registrasi' => 'required|string|max:8|min:3',
            'nama_pemilik' => 'required|string|max:40|min:3',
            'alamat' => 'required|string|min:5',
            'merk' => 'required|string|min:3',
            'tipe' => 'required|string|min:3',
            'jenis' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'tahun_pembuatan' => 'required',
            'nomor_rangkaian' => 'required',
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
            $user_edit = User::find($id);
            $user_edit->nomor_registrasi = $request->input('nomor_registrasi');
            $user_edit->nama_pemilik = $request->input('nama_pemilik');
            $user_edit->alamat = $request->input('alamat');
            $user_edit->merk = $request->input('merk');
            $user_edit->tipe = $request->input('tipe');
            $user_edit->jenis = $request->input('jenis');
            $user_edit->model = $request->input('model');
            $user_edit->tahun_pembuatan = $request->input('tahun_pembuatan');
            $user_edit->nomor_rangkaian = $request->input('nomor_rangkaian');
            $user_edit->nomor_mesin = $request->input('nomor_mesin');
            $user_edit->warna = $request->input('warna');
            $user_edit->warna_tnkb = $request->input('warna_tnkb');
            $user_edit->bahan_bakar = $request->input('bahan_bakar');
            $user_edit->update();
            return response()->json([
                'status' => 200,
                'message' => 'User Data Updated Successfully',
            ]);
        }
    }


    public function deleteuser($id)
    {
        $deleteUserlog = Servicelog::where('id_kendaraan', '=', $id);
        $deleteUser = User::findorfail($id);
        if ($deleteUser) {
            $deleteUserlog->delete();
            $deleteUser->delete();
            return response()->json([
                'status' => 200,
                'message' => 'This User Has Been Removed',
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'This User Doesnt Exist',
            ]);
        }
    }

    // Service Log
    public function addLog(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id_kendaraan' => 'required',
            'jenis_pemeliharaan' => 'required',
            'catatan_pemeliharaan' => 'nullable',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {
            $service_log = new Servicelog;
            $service_log->id_kendaraan = $request->input('id_kendaraan');
            $service_log->jenis_pemeliharaan = $request->input('jenis_pemeliharaan');
            $service_log->catatan_pemeliharaan = $request->input('catatan_pemeliharaan');
            $service_log->save();
            return response()->json([
                'status' => 200,
                'message' => 'Service Log Added'
            ]);
        }
    }


    public function editLog($id)
    {
        $service_log = Servicelog::find($id);
        if ($service_log) {
            return response()->json([
                'status' => 200,
                'log' => $service_log,
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Log Not Found',
            ]);
        }
    }

    public function deleteLog($id)
    {
        $delete_log = Servicelog::find($id)->delete();
        $delete_log;
        return response()->json([
            'status' => 200,
            'message' => 'Log Deleted Successfully',
        ]);
    }

    // Category

    public function renderCategory()
    {
        $kategoris = Category::all();
        $render_category = view('admin.categorys', compact('kategoris'))->render();

        return response()->json([
            'categorys' => $render_category,
        ]);
    }

    public function newCategory(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'new_kategori' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg|max:2048'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {

            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('/icon', 'public');


            $category = new Category;
            $category->kategori = $request->input('new_kategori');
            $category->name = $name;
            $category->path = $path;
            $category->save();

            return response()->json([
                'status' => 200,
                'alert' => 'Category Added Successfully',
            ]);
        }
    }

    public function categoryList()
    {
        $categorys = Category::all();
        $categorys_table = view('admin.category-render', compact('categorys'))->render();
        return response()->json([
            'category_list' => $categorys_table,
        ]);
    }


    public function newService(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'service' => 'required'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validate->errors(),
            ]);
        } else {
            $service = new Service;
            $service->service = $request->input('service');
            $service->save();

            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function list_service()
    {
        $services = Service::all();
        $services_table = view('admin.services', compact('services'))->render();
        return response()->json([
            'service_list' => $services_table,
        ]);
    }

    public function renderService()
    {
        $services = Service::all();
        $render_service = view('admin.service-render', compact('services'))->render();

        return response()->json([
            'services' => $render_service,
        ]);
    }

    public function renderServiceLog($id)
    {
        $service_log = Servicelog::select('created_at', 'jenis_pemeliharaan', 'catatan_pemeliharaan')->where('id_kendaraan', $id)->orderBy('created_at', 'DESC')->get();
        $render_servicelog = view('admin.servicelog', compact('service_log'))->render();

        return response()->json([
            'log' => $render_servicelog,
        ]);
    }
}

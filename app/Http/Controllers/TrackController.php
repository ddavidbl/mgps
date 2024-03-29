<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TrackController extends Controller
{
    public function trackIndex()
    {
        $user = User::find(Auth::user()->id);
        return view('user.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->lat = $request->input('lat');
            $user->lng = $request->input('lng');
            $user->kecepatan = $request->input('kecepatan');
            $user->jumlah_bahan_bakar = $request->input('bahan_bakar');
            $user->status = $request->input('status');
            $user->update();
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Something Went Wrong'
            ]);
        }
    }
}

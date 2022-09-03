<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TrackController extends Controller
{
    public function trackIndex()
    {
        return view('user.index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->lat = $request->input('lat');
            $user->lng = $request->input('lng');
            $user->update();
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Something Went Wrong'
            ]);
        }
    }
}

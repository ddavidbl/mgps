<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboardIndex()
    {
        return view('admin.dashboard');
    }

    public function renderMap()
    {
        $users = User::select()->get();
        return $users;
    }
}

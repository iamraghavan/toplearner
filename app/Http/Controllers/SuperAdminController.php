<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Check if user is logged in and is a super admin (role_id = 1)
        if (!$user || $user->role_id !== 1) {
            abort(403, 'Unauthorized access.');
        }

        return view('superadmin.dashboard', compact('user'));
    }
}

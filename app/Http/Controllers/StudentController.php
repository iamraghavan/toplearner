<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Show the student's dashboard.
     */
    public function dashboard()
    {
        $user = Auth::user();

        // Check if user is logged in and is a student (role_id = 3)
        if (!$user || $user->role_id !== 3) {
            abort(403, 'Unauthorized access.');
        }

        return view('students.dashboard', compact('user'));
    }
}

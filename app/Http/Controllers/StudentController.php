<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Show the student's dashboard.
     */
    public function dashboard($hash)
    {
        $userId = Crypt::decryptString($hash);
        $user = User::findOrFail($userId);

        // Check if accessing own dashboard
        if (Auth::id() !== $user->id) {
            abort(403, 'Unauthorized access.');
        }

        return view('students.dashboard', compact('user'));
    }
}

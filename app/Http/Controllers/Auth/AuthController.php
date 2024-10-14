<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function adminDashboard()
    {
        return view('dashboards.admin'); // Points to the staff dashboard view
    }

    public function login()
    {
        return view('auth.login');
    }

    public function checkEmail(Request $request)
    {
        $email = $request->query('email');
        $exists = User::where('email', $email)->exists();

        return response()->json(['exists' => $exists]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

//        if ($request->get('confirmation_code')){
//            return $this->register_store($request);
//        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('dashboard');
                default:
                    Auth::logout(); // Logout the user if role is not recognized

                    return redirect()->route('dashboard')->withErrors(['role' => 'Invalid role assigned to the user.']);
            }
        }

        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.']);

//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.',
//        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class ChangePasswordController extends Controller
{
    /**
     * Show the form for changing the user's password.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showChangePasswordForm()
    {
        return view('auth.passwords.change');
    }

    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'La contraseña actual no es válida.']);
        }

        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with('success', 'La contraseña se ha cambiado correctamente.');
    }
}

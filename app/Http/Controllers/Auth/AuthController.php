<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Login';

        return view('backend.auth.login', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember = request('remember'); // get nilai dari checkbox 'remember'

        // Autentikasi user menggunakan metode Auth::attempt()
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // regenerate session

            return redirect()->intended(RouteServiceProvider::HOME); // Mengarahkan ke halaman yang sebelumnya coba diakses oleh user
        }

        return back()->with('loginError', 'Error Login'); // jika autentikasi gagal, back to login
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout(); //Melakukan logout pengguna dari sistem

        $request->session()->invalidate(); //Menghapus sesi pengguna

        $request->session()->regenerateToken(); //Membuat token baru

        return redirect()->intended(route('auth.login')); //Mengarahkan pengguna ke halaman login setelah logout berhasil
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'level' => 'required',
            'password' => 'required',
        ]);

        /* $validateData['password'] = bcrypt($validateData['password']); */
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect()->route('login')
        ->with('success', 'User Successfully Added');
    }
}
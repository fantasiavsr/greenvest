<?php

namespace App\Http\Controllers;

use App\Models\Saldo_saya;
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

        $created = User::create($validateData);

        /* Saldo_saya::create([
            'user_id' => $created['id'],
            'saldo' => 0,
        ]); */

        return redirect()->route('login')
        ->with('success', 'User Successfully Added');
    }
}

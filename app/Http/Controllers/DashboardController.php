<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    public function index()
    {
        /* dd(Auth::user()); */
        $user = Auth::user();
        /* $saldo = Saldo_saya::where('user_id', $user->id)->first(); */
        $bank = Bank::where('user_id', $user->id)->get();
        $bank_default = Bank::where('user_id', $user->id)->first();
        /* dd($level); */
        return view('pages.user.index', [
            'title' => "Dashboard",
            'user' => $user,
            'bankdef' => $bank_default,
            'bank' => $bank,
            'submenu' => "no",
        ]);

    }
}

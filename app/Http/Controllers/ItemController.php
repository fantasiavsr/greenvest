<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\Saldo_saya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextest()
    {
        $user = Auth::user();
        return view('pages.item.index', [
            'title' => "Item Detail",
            'user' => $user,
        ]);
    }

    public function simulasitest()
    {
        $user = Auth::user();
        return view('pages.item.simulasi.index', [
            'title' => "Simulasi",
            'user' => $user,
        ]);
    }

    public function simulasitest2()
    {
        $user = Auth::user();
        return view('pages.item.simulasi.test.index', [
            'title' => "Simulasi",
            'user' => $user,
        ]);
    }

    public function bandingtest()
    {
        $user = Auth::user();
        return view('pages.item.perbandingan.index', [
            'title' => "Perbandingan",
            'user' => $user,
        ]);
    }

    public function belitest()
    {
        $user = Auth::user();
        $saldo = Saldo_saya::where('user_id', $user->id)->first();
        $bank = Bank::where('user_id', $user->id)->get();
        return view('pages.item.beli.index', [
            'title' => "Beli",
            'user' => $user,
            'saldo' => $saldo,
            'bank' => $bank,
        ]);
    }
}

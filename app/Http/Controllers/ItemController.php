<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\green;
use App\Models\produk_green;
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
        return view('pages.item.indextest', [
            'title' => "Item Detail",
            'user' => $user,
        ]);
    }

    public function index($id)
    {
        $user = Auth::user();
        $produk_green = produk_green::where('id', $id)->first();

        /* Switch Requirements */
        $switch = produk_green::where('perusahaan', $produk_green->perusahaan)
            ->where('id', '!=' , $produk_green->id)
            ->get();

        return view('pages.item.index', [
            'title' => "Item Detail",
            'user' => $user,
            'produk_green' => $produk_green,
            'switch' => $switch,
        ]);
    }

    public function simulasitest()
    {
        $user = Auth::user();
        return view('pages.item.simulasi.indextest', [
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
        return view('pages.item.perbandingan.indextest', [
            'title' => "Perbandingan",
            'user' => $user,
        ]);
    }

    public function belitest()
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->get();
        return view('pages.item.beli.indextest', [
            'title' => "Beli",
            'user' => $user,
            'bank' => $bank,
        ]);
    }
}

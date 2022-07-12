<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\green;
use App\Models\produk_green;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function greenbond()
    {
        $user = Auth::user();
        $green = green::whereIn('id', [2])->get();
        $produk_green = produk_green::whereIn('green_id', [2])->get();
        return view('pages.user.transaksi.green.bond.index', [
            'title' => "Transaksi | Green Bond",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
        ]);
    }

    public function greensukuk()
    {
        $user = Auth::user();
        $green = green::whereIn('id', [2])->get();
        $produk_green = produk_green::whereIn('green_id', [2])->get();
        return view('pages.user.transaksi.green.sukuk.index', [
            'title' => "Transaksi | Green Sukuk",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
        ]);
    }

    public function greentaxonomy()
    {

        $user = Auth::user();
        $green = green::whereIn('id', [3])->get();
        $produk_green = produk_green::whereIn('green_id', [3])->get();
        return view('pages.user.transaksi.green.taxonomy.index', [
            'title' => "Transaksi | Green Taxonomy",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
        ]);
    }

    public function listtransaksi()
    {
        $user = Auth::user();
        return view('pages.user.transaksi.list-transaksi.index', [
            'title' => "Transaksi | List Transaksi",
            'user' => $user,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('pages.user.transaksi.green.bond.index', [
            'title' => "Transaksi | Green Bond",
            'user' => $user,
        ]);
    }

    public function greensukuk()
    {
        $user = Auth::user();
        return view('pages.user.transaksi.green.sukuk.index', [
            'title' => "Transaksi | Green Sukuk",
            'user' => $user,
        ]);
    }

    public function greentaxonomy()
    {
        $user = Auth::user();
        return view('pages.user.transaksi.green.taxonomy.index', [
            'title' => "Transaksi | Green Taxonomy",
            'user' => $user,
        ]);
    }
}

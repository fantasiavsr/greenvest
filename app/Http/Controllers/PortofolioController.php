<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\green;
use App\Models\list_transaksi;
use App\Models\produk_green;
use App\Models\produk_image;
use App\Models\dummy_laba;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $image = produk_image::all();
        $list_transaksi = list_transaksi::where('user_id', $user->id)->where('status', 'selesai')->orderBy('created_at', 'DESC')->get();

        $dummy_laba = dummy_laba::all();
        return view('pages.user.portofolio.index', [
            'title' => "Portofolio",
            'user' => $user,
            'image' => $image,
            'list_transaksi' => $list_transaksi,
            'dummy_laba' => $dummy_laba,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\dummy_bankdef;
use App\Models\dummy_laba;
use App\Models\green;
use App\Models\list_transaksi;
use App\Models\produk_green;
use App\Models\produk_image;
use App\Models\charttest;
use App\Models\google_finance;
use App\Models\googlefin_format;

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
        $list_transaksi = list_transaksi::where('user_id', $user->id)->where('jenis_transaksi', 'Pembelian')->where('status', 'selesai')->orderBy('created_at', 'DESC')->get();

        $dummy_laba = dummy_laba::all();
        return view('pages.user.portofolio.index', [
            'title' => "Portofolio",
            'user' => $user,
            'image' => $image,
            'list_transaksi' => $list_transaksi,
            'dummy_laba' => $dummy_laba,
        ]);
    }

    public function portofolio_detail($id)
    {
        $user = Auth::user();
        $this_transaksi = list_transaksi::find($id);

        $produk_green = produk_green::where('id', $this_transaksi->produk_green_id)->first();
        $googlefin_format = googlefin_format::where('produk_green_id', $produk_green->id)->first();

        $dummy_laba = dummy_laba::where('produk_green_id', $produk_green->id)->first();
        $image = produk_image::where('produk_green_id', $produk_green->id)->first();
        return view('pages.user.portofolio.detail.index', [
            'title' => "Portofolio",
            'user' => $user,
            'this_transaksi' => $this_transaksi,
            'produk_green' => $produk_green,
            'googlefin_format' => $googlefin_format,
            'dummy_laba' => $dummy_laba,
            'image' => $image,
        ]);
    }

    public function portofolio_beli(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required|numeric',
            'produk_green_id' => 'required|numeric',
            'bank_id' => 'required|numeric',
            /* 'pesan' => 'required', */
            'total_bayar' => 'required|numeric',
            'jenis_transaksi' => 'required',
            'status' => 'required',
            'kode_transaksi' => 'required',
        ]);

        if ($request->pesan == "") {
            $validateData['pesan'] = "Tidak ada pesan.";
        } else {
            $validateData['pesan'] = $request->pesan;
        }

        list_transaksi::create($validateData);

        return redirect()->route('transaksi.list')
            ->with('success', 'Successfully Added');
    }
}

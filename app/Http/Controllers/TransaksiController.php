<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\green;
use App\Models\list_transaksi;
use App\Models\produk_green;
use App\Models\produk_image;

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
        $produk_green = produk_green::whereIn('green_id', [2])->orderBy('nama', 'ASC')->get();
        $image = produk_image::all();
        return view('pages.user.transaksi.green.bond.index', [
            'title' => "Transaksi | Green Bond",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
            'image' => $image,
        ]);
    }

    public function greensukuk()
    {
        $user = Auth::user();
        $green = green::whereIn('id', [3])->get();
        $produk_green = produk_green::whereIn('green_id', [1])->orderBy('nama', 'ASC')->get();
        $image = produk_image::all();
        return view('pages.user.transaksi.green.sukuk.index', [
            'title' => "Transaksi | Green Sukuk",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
            'image' => $image,
        ]);
    }

    public function greentaxonomy()
    {

        $user = Auth::user();
        $green = green::whereIn('id', [3])->get();
        $produk_green = produk_green::whereIn('green_id', [3])->orderBy('nama', 'ASC')->get();
        $image = produk_image::all();
        return view('pages.user.transaksi.green.taxonomy.index', [
            'title' => "Transaksi | Green Taxonomy",
            'user' => $user,
            'green' => $green,
            'produk_green' => $produk_green,
            'image' => $image,
        ]);
    }

    public function listtransaksi()
    {
        $user = Auth::user();
        $image = produk_image::all();
        $list_transaksi = list_transaksi::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return view('pages.user.transaksi.list-transaksi.index', [
            'title' => "Transaksi | List Transaksi",
            'user' => $user,
            'list_transaksi' => $list_transaksi,
            'image' => $image,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'bank_id' => 'required|numeric',
            /* 'pesan' => 'required', */
            'total_bayar' => 'required|numeric',
            'user_id' => 'required|numeric',
            'produk_green_id' => 'required|numeric',
            'jenis_transaksi' => 'required',
            'status' => 'required',
            'kode_transaksi' => 'required',
        ]);

        if($request->pesan == ""){
            $validateData['pesan'] = "Tidak ada pesan.";
        }else{
            $validateData['pesan'] = $request->pesan;
        }

        $produk_green = produk_green::find($request->produk_green_id);
        if($request->total_bayar < $produk_green->min_pembelian_produk) {
            return back()->withErrors(['msg' => 'Minimal Pembelian Produk adalah Rp.'.$produk_green->min_pembelian_produk]);
        }

        /* dd($request->all()); */
        /* dd($validateData); */

        list_transaksi::create($validateData);

        return redirect()->route('transaksi.list')
        ->with('success', 'Successfully Added');
    }

}

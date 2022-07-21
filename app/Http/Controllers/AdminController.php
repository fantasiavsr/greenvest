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
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index()
    {

    }

    public function list_transaksi()
    {
        $user = Auth::user();
        $list_transaksi = list_transaksi::orderBy('created_at', 'DESC')->get();

        $image = produk_image::all();
        $userall = User::all();
        return view('pages.admin.transaksi.list-transaksi', compact('user'), [
            'title' => "Admin - List Transaksi",
            'submenu' => "no",
            'list_transaksi' => $list_transaksi,
            'image' => $image
        ]);
    }

    public function edit_transaksi($id)
    {
        $user = Auth::user();
        $list_transaksi = list_transaksi::all();
        $image = produk_image::all();
        $userall = User::all();

        $this_transaksi = list_transaksi::find($id);
        return view('pages.admin.transaksi.edit.edit-transaksi', compact('user'), [
            'title' => "Admin - List Transaksi",
            'submenu' => "no",
            'list_transaksi' => $list_transaksi,
            'image' => $image,
            'this_transaksi' => $this_transaksi
        ]);
    }

    public function update_transaksi(Request $request)
    {

        $flights = list_transaksi::find($request->id);
        /* dd($request->all(), $flights); */
        /* $flights->bank_id = $request->bank_id; */
        /* $flights->total_bayar = $request->total_bayar; */
        $flights->status = $request->status;

        $flights->save();

        return redirect()->route('admin.transaksi');
    }

    public function delete_transaksi($id){
        $item = list_transaksi::find($id);
        $item->delete();
        return redirect()->route('admin.transaksi');
    }

    public function list_item(){
        $user = Auth::user();
        $list_item = produk_green::orderBy('nama', 'ASC')->get();
        $image = produk_image::all();
        $userall = User::all();
        $googlefin_format = googlefin_format::all();

        return view('pages.admin.item.list-item', compact('user'), [
            'title' => "Admin - List Item",
            'submenu' => "no",
            'list_item' => $list_item,
            'image' => $image,
            'googlefin_format' => $googlefin_format
        ]);
    }

    public function edit_item($id){
        $user = Auth::user();
        /* $list_item = produk_green::orderBy('nama', 'ASC')->all(); */
        $image = produk_image::all();
        $userall = User::all();
        $this_item = produk_green::find($id);
        $charttest = charttest::where('produk_green_id', $id)->first();
        $google_finance = google_finance::where('produk_green_id', $id)->first();
        $dummy_laba = dummy_laba::where('produk_green_id', $id)->first();

        return view('pages.admin.item.edit.edit-item', compact('user'), [
            'title' => "Admin - List Item",
            'submenu' => "no",
            /* 'list_item' => $list_item, */
            'image' => $image,
            'this_item' => $this_item,
            'charttest' => $charttest,
            'google_finance' => $google_finance,
            'dummy_laba' => $dummy_laba
        ]);
    }

    public function update_item(Request $request){

        $request->validate([
            'year_return' => 'numeric',
            'total_aum' => 'numeric',
            'pre_close' => 'numeric',
            'jatuh_tempo' => 'numeric',
            'min_pembelian_produk' => 'numeric',
            'biaya_pembelian' => 'numeric',
            'biaya_penjualan' => 'numeric',
            'laba' => 'numeric',
        ]);

        /* dd($request->all()); */
        $flights = produk_green::find($request->id);
        /* dd($flights); */
        $flights->nama = $request->nama;
        $flights->perusahaan = $request->perusahaan;
        $flights->green_id = $request->green_id;
        $flights->jenis_produk = $request->jenis_produk;
        $flights->kategori = $request->kategori;
        $flights->tingkat_risiko = $request->tingkat_risiko;
        $flights->year_return = $request->year_return;
        $flights->total_aum = $request->total_aum;
        $flights->pre_close = $request->pre_close;
        $flights->jatuh_tempo = $request->jatuh_tempo;
        $flights->min_pembelian_produk = $request->min_pembelian_produk;
        $flights->biaya_pembelian = $request->biaya_pembelian;
        $flights->biaya_penjualan = $request->biaya_penjualan;
        $flights->biaya_penampung = $request->biaya_penampung;
        $flights->save();

        $dummy_laba = dummy_laba::where('produk_green_id', $request->id)->first();
        if(isset($dummy_laba)){
            $dummy_laba->produk_green_id = $request->id;
            $dummy_laba->laba= $request->laba;
            $dummy_laba->save();
        }else{
            $dummy_laba = new dummy_laba;
            $dummy_laba->produk_green_id = $request->id;
            $dummy_laba->laba= $request->laba;
            $dummy_laba->save();
        }

        $googlefin_format = googlefin_format::where('produk_green_id', $request->id)->first();
        if(isset($googlefin_format)){
            $googlefin_format->produk_green_id = $request->id;
            $googlefin_format->pre_close = $request->pre_close;
            $googlefin_format->market_cap = $request->total_aum;
            $googlefin_format->div_yield = $request->year_return;
            $googlefin_format->save();
        }else{
            $googlefin_format = new googlefin_format;
            $googlefin_format->produk_green_id = $request->id;
            $googlefin_format->pre_close = $request->pre_close;
            $googlefin_format->market_cap = $request->total_aum;
            $googlefin_format->div_yield = $request->year_return;
            $googlefin_format->save();
        }

        if($request->ticker != null){
            $google_finance = google_finance::where('produk_green_id', $request->id)->first();
            if(isset($google_finance)){
                $google_finance->ticker = $request->ticker;
                $google_finance->save();

            }else{
                $google_finance = new google_finance;
                $google_finance->produk_green_id = $request->id;
                $google_finance->ticker = $request->ticker;
                $google_finance->save();
            }
        }else{
            $google_finance = google_finance::where('produk_green_id', $request->id)->first();
            if(isset($google_finance)){
                $google_finance->delete();
            }
        }

        return redirect()->route('admin.item');
    }

    public function create_item(){
        $user = Auth::user();
        return view('pages.admin.item.edit.create-item', compact('user'), [
            'title' => "Admin - List Item",
            'submenu' => "no",
        ]);
    }

    public function store_item(Request $request){
        /* dd($request->all()); */
        $request->validate([
            'year_return' => 'required|numeric',
            'total_aum' => 'required|numeric',
            'pre_close' => 'required|numeric',
            'jatuh_tempo' => 'required|numeric',
            'min_pembelian_produk' => 'required|numeric',
            'biaya_pembelian' => 'required|numeric',
            'biaya_penjualan' => 'required|numeric',
            'laba' => 'required|numeric',
        ]);

        $flights = new produk_green;
        $flights->nama = $request->nama;
        $flights->perusahaan = $request->perusahaan;
        $flights->green_id = $request->green_id;
        $flights->jenis_produk = $request->jenis_produk;
        $flights->kategori = $request->kategori;
        $flights->tingkat_risiko = $request->tingkat_risiko;
        $flights->year_return = $request->year_return;
        $flights->total_aum = $request->total_aum;
        $flights->pre_close = $request->pre_close;
        $flights->jatuh_tempo = $request->jatuh_tempo;
        $flights->min_pembelian_produk = $request->min_pembelian_produk;
        $flights->biaya_pembelian = $request->biaya_pembelian;
        $flights->biaya_penjualan = $request->biaya_penjualan;
        $flights->biaya_penampung = $request->biaya_penampung;
        $flights->save();

        $dummy_laba = new dummy_laba;
        $dummy_laba->produk_green_id = $flights->id;
        $dummy_laba->laba= $request->laba;
        $dummy_laba->save();

        $googlefin_format = new googlefin_format;
        $googlefin_format->produk_green_id = $flights->id;
        $googlefin_format->pre_close = $request->pre_close;
        $googlefin_format->market_cap = $request->total_aum;
        $googlefin_format->div_yield = $request->year_return;
        $googlefin_format->save();

        if($request->ticker != null){
            $google_finance = new google_finance;
            $google_finance->produk_green_id = $flights->id;
            $google_finance->ticker = $request->ticker;
            $google_finance->save();
        }

        return redirect()->route('admin.item');
    }

    public function delete_item($id){
        $item = produk_green::find($id);
        $item->delete();
        return redirect()->route('admin.item');
    }
}

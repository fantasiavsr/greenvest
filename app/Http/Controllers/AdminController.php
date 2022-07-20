<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\dummy_bankdef;
use App\Models\green;
use App\Models\list_transaksi;
use App\Models\produk_green;
use App\Models\produk_image;


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
        return view('pages.admin.transaksi.list_transaksi', compact('user'), [
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
        $flights->bank_id = $request->bank_id;
        $flights->total_bayar = $request->total_bayar;
        $flights->status = $request->status;

        $flights->save();

        return redirect()->route('admin.transaksi');
    }

    public function list_item(){
        $user = Auth::user();
        $list_item = produk_green::all();
        $image = produk_image::all();
        $userall = User::all();
        return view('pages.admin.item.list-item', compact('user'), [
            'title' => "Admin - List Item",
            'submenu' => "no",
            'list_item' => $list_item,
            'image' => $image
        ]);
    }

    public function edit_item($id){
        $user = Auth::user();
        $list_item = produk_green::all();
        $image = produk_image::all();
        $userall = User::all();
        $this_item = produk_green::find($id);
        return view('pages.admin.item.edit.edit-item', compact('user'), [
            'title' => "Admin - List Item",
            'submenu' => "no",
            'list_item' => $list_item,
            'image' => $image,
            'this_item' => $this_item
        ]);
    }
}

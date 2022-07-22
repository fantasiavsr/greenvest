<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\dummy_bankdef;
use App\Models\list_transaksi;
use App\Models\produk_green;
use App\Models\produk_image;
use App\Models\dummy_laba;
use App\Models\googlefin_format;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* dd(Auth::user()); */
        $user = Auth::user();
        $greenvest = Bank::where('user_id', $user->id)->where('bank_name', "GreenVest")->first();
        $bank = Bank::where('user_id', $user->id)->get();
        $bank_default = dummy_bankdef::where('user_id', $user->id)->first();
        $level = Auth::user()->level;

        $image = produk_image::all();
        $list_transaksi = list_transaksi::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        $portofolio = list_transaksi::where('user_id', $user->id)->where('jenis_transaksi', 'Pembelian')->where('status', 'selesai')->orderBy('created_at', 'DESC')->get();
        $dummy_laba = dummy_laba::all();

        $googlefin_format = googlefin_format::all();

        /* dd($level); */
        if ($level == "Admin") {
            return view('pages.admin.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else if ($level == "User") {
            return view('pages.user.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
                'greenvest' => $greenvest,
                'bankdef' => $bank_default,
                'bank' => $bank,
                'submenu' => "no",
                'image' => $image,
                'list_transaksi' => $list_transaksi,
                'portofolio' => $portofolio,
                'dummy_laba' => $dummy_laba,
                'googlefin_format' => $googlefin_format,
            ]);
        } else if ($level == "Developer") {
            return view('pages.developer.index', compact('user'), [
                'title' => "Dashboard",
                'user' => $user,
            ]);
        } else {
            return back();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'level' => 'required',
            'password' => 'required',
        ]);

        $validateData['password'] = Hash::make($request['password']);

        User::create($validateData);

        return redirect()->route('login')
            ->with('success', 'User Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('pages.developer.user.userEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'level' => 'required',
            'password' => 'nullable',
        ]);

        $user = User::where('id', $id)->first();
        $user->nama_lengkap = $request->get('nama_lengkap');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->no_telepon = $request->get('nohp');
        $user->level = $request->get('level');

        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'Employee Successfully Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::find($request->id_user);
        $user->delete();
        return redirect()->route('user.index')
            ->with('success', 'User Successfully Deleted');
    }

    public function bankdefupdate(Request $request)
    {
        $flights = dummy_bankdef::find($request->id);
        $flights->user_id = $request->user_id;
        $flights->bank_id = $request->bank_id;

        $flights->save();

        return redirect('user');
    }
}

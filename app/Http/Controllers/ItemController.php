<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bank;
use App\Models\green;
use App\Models\produk_green;
use App\Models\charttest;
use App\Models\dummy_bankdef;
use App\Models\saldo_greenvest;
use App\Models\google_finance;
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
        $google_finance = google_finance::where('produk_green_id', $id)->first();

        /* Google Finance API */
        if (isset($google_finance)) {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://google-finance4.p.rapidapi.com/ticker/?t=' . $google_finance->ticker,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => ['X-RapidAPI-Host: google-finance4.p.rapidapi.com', 'X-RapidAPI-Key: 1df20e6770msh83a29817c29639cp167a2djsn6b0821802305'],
            ]);

            $response = curl_exec($curl);

            curl_close($curl);

            $charts = json_decode($response, true);
        }else{
            $charts = null;
        }

        $charttest = charttest::where('produk_green_id', $id)->orderBy('year', 'desc')->first();

        /* Switch Requirements */
        $switch = produk_green::where('perusahaan', $produk_green->perusahaan)
            ->where('id', '!=', $produk_green->id)
            ->get();

        return view('pages.item.index', [
            'title' => "Item Detail",
            'user' => $user,
            'produk_green' => $produk_green,
            'switch' => $switch,
            'charttest' => $charttest,
            'charts' => $charts,
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

    public function beli($id)
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->whereNotIn('bank_name', ["LinkAja", "GoPay", "GreenVest",])->get();
        $ewallet = Bank::where('user_id', $user->id)->whereIn('bank_name', ["LinkAja", "GoPay",])->get();
        $metodebayar = Bank::where('user_id', $user->id)->whereNotIn('bank_name', ["GreenVest",])->get();
        $greenvest = Bank::where('user_id', $user->id)->where('bank_name', "GreenVest")->first();

        $produk_green = produk_green::where('id', $id)->first();
        return view('pages.item.beli.index', [
            'title' => "Beli",
            'user' => $user,
            'bank' => $bank,
            'ewallet' => $ewallet,
            'metodebayar' => $metodebayar,
            'produk_green' => $produk_green,
            'greenvest' => $greenvest,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;

use App\Models\PesanTamu;

class DashboardController extends Controller

{

    public function index()

    {

        $jumlahKegiatan = Kegiatan::count();

        $jumlahPesan = PesanTamu::count();

        $daftarPesanTamu = PesanTamu::latest()->take(5)->get();

        return view('dashboard', [

            'jumlahKegiatan' => $jumlahKegiatan,

            'jumlahPesan' => $jumlahPesan,

            'daftarPesanTamu' => $daftarPesanTamu,

        ]);

    }

}

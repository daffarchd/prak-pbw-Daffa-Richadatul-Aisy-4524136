<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;

use App\Models\Setting;

class PageController extends Controller

{

    public function home()

    {

        $perPage = Setting::get('home_kegiatan_per_page', 6);

        $kegiatan_terbaru = Kegiatan::latest()->paginate($perPage);

        

        return view('home', ['kegiatan_terbaru' => $kegiatan_terbaru]);

    }

}

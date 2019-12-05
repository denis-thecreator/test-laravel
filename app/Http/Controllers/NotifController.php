<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NotifController extends Controller
{
    public function index()
    {
        return view('notifikasi');
    }

    public function sukses()
    {
        Session::flash('sukses', 'Ini Pesan Sukses');
        return redirect('pesan');
    }

    public function peringatan()
    {
        Session::flash('peringatan', 'Ini Pesan Peringatan');
        return redirect('pesan');
    }

    public function gagal()
    {
        Session::flash('gagal', 'Ini Pesan Gagal');
        return redirect('pesan');
    }
}

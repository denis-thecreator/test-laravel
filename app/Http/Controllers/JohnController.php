<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class JohnController extends Controller
{
    public function enkripsi()
    {
        $encrypted = Crypt::encryptString('Belajar menggunakan Encrypt Laravel');
        $decrypted = Crypt::decryptString($encrypted);

        echo "Hasil Enkripsi : ".$encrypted;
        echo "<br><br>";
        echo "Hasi Dekripsi : ".$decrypted;
    }

    public function data()
    {
        $parameter = [
            'nama' => 'Denistian Diky',
            'pekerjaan' => 'Ticketing Officers'
        ];

        $enkripsi = Crypt::encrypt($parameter);
        echo '<a href="/data/'.$enkripsi.'">Klik</a>';
    }

    public function data_proses($data)
    {
        $data = Crypt::decrypt($data);

        echo "Nama :".$data['nama'];
        echo "<br>";
        echo "Pekerjaan :".$data['pekerjaan'];
    }

    public function hash()
    {
        $my_hash = Hash::make('Halo Johny');
        echo $my_hash;
    }

    public function tampilkanSession(Request $request)
    {
        if($request->session()->has('nama'))
        {
            echo $request->session()->get('nama');
        }
        else
        {
            echo 'Tidak ada data dalam session';
        }
    }

    public function buatSession(Request $request)
    {
        $request->session()->put('nama', 'Denistian Diki M');
        echo "Data telah ditambahkan ke session";
    }

    public function hapusSession(Request $request)
    {
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session";
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function upload_proses(Request $request)
    {
        //Membuat validasi
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required'
        ]);

        //Menyimpan data file yg sudah di upload dalam bentuk variable
        $file = $request->file('file');

        //nama file
        echo 'File Name:'.$file->getClientOriginalName();
        echo '<br>';

        //extention file
        echo 'Ekstensi File:'.$file->getClientOriginalExtension();
        echo '<br>';

        //get original path
        echo 'File Real Path:'.$file->getRealPath();
        echo '<br>';

        //get ukuran file
        echo 'Ukuran File:'.$file->getSize();
        echo '<br>';

        //tipe mime
        echo 'File Mime Size:'.$file->getMimeType();
        echo '<br>';

        //nama target upload folder
        $tujuan_upload = 'data';
        
        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());
        
    }
}

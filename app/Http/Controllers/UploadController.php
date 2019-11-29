<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachment;

class UploadController extends Controller
{
    public function upload()
    {
        $attachment = Attachment::all();
        return view('upload', ['attachment'=>$attachment]);
    }

    public function upload_proses(Request $request)
    {
        //Membuat validasi
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required'
        ]);

        //Menyimpan data file yg sudah di upload dalam bentuk variable
        $file = $request->file('file');

        // //nama file
        // echo 'File Name:'.$file->getClientOriginalName();
        // echo '<br>';

        // //extention file
        // echo 'Ekstensi File:'.$file->getClientOriginalExtension();
        // echo '<br>';

        // //get original path
        // echo 'File Real Path:'.$file->getRealPath();
        // echo '<br>';

        // //get ukuran file
        // echo 'Ukuran File:'.$file->getSize();
        // echo '<br>';

        // //tipe mime
        // echo 'File Mime Size:'.$file->getMimeType();
        // echo '<br>';

        $nama_file = time().'_'.$file->getClientOriginalName();

        //nama target upload folder
        $tujuan_upload = 'data';
        
        //upload file
        Attachment::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan
        ]);

        $file->move($tujuan_upload, $nama_file);

        return redirect()->back();
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t_pegawai = DB::table('employees')->paginate(10);
        return view('pegawai/index', ['pegawai' => $t_pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data dari halaman "add" ke database
        DB::table('employees')->insert([
            'employees_name' => $request->nama,
            'employees_jabatan' => $request->jabatan,
            'employees_umur' => $request->umur,
            'employees_alamat' => $request->alamat
        ]);

        //mengalihkan ke halaman pegawai
        return redirect('/pegawai')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $t_pegawai = DB::table('employees')->where('employees_id', $id)->get();
        return view('pegawai/edit', ['pegawai'=> $t_pegawai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data dari halaman "edit" ke database
        DB::table('employees')->where('employees_id', $request->id)->update([
            'employees_name'=>$request->nama,
            'employees_jabatan'=>$request->jabatan,
            'employees_umur'=>$request->umur,
            'employees_alamat'=>$request->alamat
        ]);

        //setelah update dialihkan kembali ke halaman pegawai
        return redirect('/pegawai')->with('status', 'Perubahan Sukses!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data pegawai berdasar id yg dipilih
        DB::table('employees')->where('employees_id', $id)->delete();

        return redirect('/pegawai')->with('status', 'Sukses Hapus Data');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('employees')
                   ->where('employees_name', 'like', "%".$cari."%")
                   ->paginate();

        return view('pegawai/index', ['pegawai'=>$pegawai]);
    }
}

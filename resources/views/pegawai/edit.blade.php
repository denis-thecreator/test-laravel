@extends('layout')

@section('title', 'Edit Data Pegawai')

@section('konten')
    @foreach ($pegawai as $p)
        <form action="{{url('/pegawai/update')}}" method="POST">
            @csrf
            <input type="hidden" value="{{$p->employees_id}}" name="id">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$p->employees_name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$p->employees_jabatan}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="umur" name="umur" value="{{$p->employees_umur}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-2">
                    <textarea name="alamat" id="alamat" cols="50" rows="5" class="form-control">{{$p->employees_alamat}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="UPDATE">
                    <a href="{{url('/pegawai')}}" class="btn btn-link">Kembali</a>
                </div>
            </div>
        </form>
    @endforeach
@endsection
@extends('layout')

@section('title', 'Tambah Member')

@section('konten')
    <form action="{{url('member/store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="nama" class="col-md-1 col-form-label">Nama</label>
            <div class="col-md-4">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">isikan nama anda</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-md-1 col-form-label">Alamat</label>
            <div class="col-md-4">
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                <small id="helpId" class="text-muted">isikan alamat anda</small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <input type="submit" value="Tambah Member" class="btn btn-primary">
                <a href="{{url('member/')}}" class="btn btn-link">Kembali</a>
            </div>
        </div>
    </form>
@endsection
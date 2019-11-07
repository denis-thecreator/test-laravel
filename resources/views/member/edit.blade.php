@extends('layout')

@section('title', 'Tambah Member')

@section('konten')
    <form action="{{url('member/update/'.$member->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="nama" class="col-md-1 col-form-label">Nama</label>
            <div class="col-md-4">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="" aria-describedby="helpId" value="{{$member->nama}}">
                <small id="helpId" class="text-muted">isikan nama anda</small>
                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{$errors->first('nama')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-md-1 col-form-label">Alamat</label>
            <div class="col-md-4">
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{$member->alamat}}</textarea>
                <small id="helpId" class="text-muted">isikan alamat anda</small>
                @if ($errors->has('alamat'))
                    <div class="text-danger">
                        {{$errors->first('alamat')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <input type="submit" value="Update Member" class="btn btn-primary">
                <a href="{{url('member/')}}" class="btn btn-link">Kembali</a>
            </div>
        </div>
    </form>
@endsection
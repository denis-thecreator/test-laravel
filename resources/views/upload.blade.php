@extends('layout')

@section('title', 'Test Upload File(s)')
    
@section('konten')
    @if (count($errors)>0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif

    <form action="/upload/proses" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="file" class="col-2">File Gambar</label>
            <input type="file" id="file" name="file" class="col-3 pl-0">
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-2">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control col-3" rows="5"></textarea>
        </div>
        <div class="form-group row">
            <label for="" class="col-2"></label>
            <input type="submit" class="btn btn-primary" value="SUBMIT">
        </div>
    </form>
@endsection
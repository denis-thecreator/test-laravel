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

    <h4>Data</h4>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>File</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attachment as $a)
                <tr>
                    <td><img src="{{url('data/'.$a->file)}}" width="150px"></td>
                    <td>{{$a->keterangan}}</td>
                    <td><a href="{{url('/upload/hapus/'.$a->id)}}" class="badge badge-danger">hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
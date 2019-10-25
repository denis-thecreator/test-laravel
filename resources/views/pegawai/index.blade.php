@extends('layout')

@section('title', 'Data Pegawai')

@section('konten')
    <a href="{{url('/pegawai/add')}}" class="btn btn-link" style="padding-left:0">+ Tambah Data Pegawai</a><br>
    <form action="/pegawai/cari" method="GET">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-dark" id="button-addon-1"><i class="fas fa-search"></i></button>
            </div>
            <input type="text" name="cari" class="form-control" placeholder="Cari Pegawai.." aria-describedby="button-addon-1" value="{{old('cari')}}">
        </div>
    </form>
    <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$p->employees_name}}</td>
                    <td>{{$p->employees_jabatan}}</td>
                    <td>{{$p->employees_umur}}</td>
                    <td>{{$p->employees_alamat}}</td>
                    <td>
                        <a href="{{url('/pegawai/edit/'.$p->employees_id)}}" class="badge badge-warning">edit</a>
                        <a href="{{url('/pegawai/delete/'.$p->employees_id)}}" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{$pegawai->links()}}
@endsection

@section('msg')
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" data-auto-dismiss role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
@endsection
@extends('layout')

@section('title', 'Data Pegawai')

@section('konten')
    <a href="{{url('/pegawai/add')}}" class="btn btn-link" style="padding-left:0">+ Tambah Data Pegawai</a>
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
                        <a href="/pegawai/edit/{{$p->employees_id}}" class="badge badge-warning">edit</a>
                        <a href="{{url('/pegawai/delete/'.$p->employees_id)}}" class="badge badge-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

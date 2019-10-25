@extends('layout')

@section('title', 'Data Member')

@section('konten')
    <a href="{{url('/member/tambah')}}" class="btn btn-primary mb-3">Input Member Baru</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($member as $m)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->alamat}}</td>
                        <td>
                            <a href="{{url('/member/edit'.$m->id)}}" class="badge badge-warning">edit</a>
                            <a href="{{url('/member/delete'.$m->id)}}" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$member->links()}}
@endsection

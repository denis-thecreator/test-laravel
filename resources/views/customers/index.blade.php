@extends('layout')

@section('title', 'Data Customers')

@section('konten')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>No. Telp</th>
            </thead>
            <tbody>
                @foreach ($customers as $c)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$c->nama}}</td>
                        <td>{{$c->phone->nomor_telpon}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$customers->links()}}
    </div>
    
@endsection

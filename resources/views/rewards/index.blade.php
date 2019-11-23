@extends('layout')

@section('title', 'Data Hadiah')

@section('konten')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Hadiah</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                @foreach ($customer as $r)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$r->nama}}</td>
                        <td>
                            &nbsp;
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection

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
                @foreach ($customer as $c)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$c->nama}}</td>
                        <td>
                            <ul>
                                @foreach ($c->rewards as $r)
                                    <li>{{$r->nama_hadiah}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$c->rewards->count()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$customer->links()}}
    </div>
    
@endsection

@extends('layout')

@section('title', 'Data Artikel')

@section('konten')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>No</th>
                <th>Judul</th>
                <th>Tags</th>
                <th>Jumlah Tags</th>
            </thead>
            <tbody>
                @foreach ($articles as $a)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->judul}}</td>
                        <td>
                            <ul>
                                @foreach ($a->tags as $t)
                                    <li>{{$t->tag}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$a->tags->count()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection

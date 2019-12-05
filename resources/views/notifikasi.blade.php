@extends('layout')

@section('title', 'Test Notification Flash')

@section('konten')
    <div class="row">
        <div class="col-12">
            {{-- button test alert --}}
            <a href="{{url('/pesan/sukses')}}" class="badge badge-success mb-3">sukses</a>
            <a href="{{url('/pesan/peringatan')}}" class="badge badge-warning mb-3">peringatan</a>
            <a href="{{url('/pesan/gagal')}}" class="badge badge-danger mb-3">gagal</a>

            @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                    <button type="submit" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif

            @if ($message = Session::get('peringatan'))
                <div class="alert alert-warning alert-block">
                    <button type="submit" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif

            @if ($message = Session::get('gagal'))
                <div class="alert alert-danger alert-block">
                    <button type="submit" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                </div>
            @endif
        </div>
    </div>
@endsection
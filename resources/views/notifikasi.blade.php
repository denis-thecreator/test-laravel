@extends('layout')

@section('title', 'Test Notification Flash')

@section('konten')
    <div class="row">
        <div class="col-12">
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
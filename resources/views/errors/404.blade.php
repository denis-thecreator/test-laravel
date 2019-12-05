@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('image')
    <img src="{{url('/img/giphy (1).gif')}}">
@endsection

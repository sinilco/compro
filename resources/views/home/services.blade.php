@extends('layouts.template')

@section('judul')
    services
@endsection
@section('main')
    @include('home.main.services')
    @yield('breadcrumbs')
    @yield('services')
@endsection
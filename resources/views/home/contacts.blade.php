@extends('layouts.template')

@section('judul')
    contact
@endsection

@section('main')
@include('home.main.contacts')
@yield('breadcrumbs')
@yield('contacts')
@endsection
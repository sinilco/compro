@extends('layouts.template')

@section('judul')
    products
@endsection
@section('main')
@include('home.main.products')
@yield('breadcrumbs')
@yield('product')
@endsection
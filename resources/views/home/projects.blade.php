@extends('layouts.template')

@section('judul')
    projects
@endsection
@section('main')
@include('home.main.projects')
@yield('breadcrumbs')
@yield('projects')
@endsection
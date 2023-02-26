@extends ('layouts.template')

@section('judul')
    about
@endsection

@section('main')
@include('home.main.about')
@yield('breadcrumbs')
@yield('about')
@yield('counter')
@yield('altabout')
@yield('altabout2')
@endsection
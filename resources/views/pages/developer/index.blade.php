@extends('layouts\main')

@section('content')
    @include('Partials.navbaruser')

    <div class="main">
        ini Developer {{ $user->nama_lengkap }}
    </div>

    @include('Partials.footer')
@endsection

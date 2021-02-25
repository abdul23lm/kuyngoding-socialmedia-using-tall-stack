
@extends('layouts.base')
@section('body')
    @include('layouts.partials.navigation')
    <div>
        @yield('content')
    </div>
@endsection

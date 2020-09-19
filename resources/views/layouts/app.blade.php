
@extends('layouts.base')
@section('body')
    @include('layouts.partials.navigation')
    <div class="py-6">
        @yield('content')
    </div>
@endsection

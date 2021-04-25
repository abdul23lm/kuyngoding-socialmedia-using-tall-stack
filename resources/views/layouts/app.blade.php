
@extends('layouts.base')
@section('body')
    {{-- @include('layouts.partials.navigation') --}}
    <div class="flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/5">
            <livewire:navbar/>
        </div>
        <div class="flex-1">
            @yield('content')
        </div>
        <div class="w-full lg:w-1/3">
            <div class="w-full lg:w-1/3 lg:fixed lg:h-screen lg:border-l border-cool-gray-200 text-cool-gray-600 text-sm">
                <div class="p-4">
                    @yield('rightside')
                </div>
                <div class="border-t border-cool-gray-200 p-4 text-center lg:text-left">
                    <div class="mb-3">
                    Selamat Datang di Kuyngoding Social Media. Daftar dan tulis cerita kodingmu.
                    </div>
                    &copy; {{ config('app.name')}} since 2021 - {{ date('Y')}}
                    <div class="font-semibold">Developed by
                        <a href="github.com/abdul23lm" target="_blank">Abdul Latif Munjiat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

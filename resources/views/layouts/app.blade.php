
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
            </div>
            <div class="border-t border-cool-gray-200 p-4">
                <div class="mb-1">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia nam, vitae commodi exercitationem eius consequatur libero explicabo ad quaerat. Culpa eos quos dicta iure sunt nam debitis voluptatum, ad accusamus?
                </div>
                &copy; {{ config('app.name')}} since 2021 - {{ date('Y')}}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title' => 'Your Timeline'])

@section('content')
    <p class="p-6">
        <livewire:status.create/>
        <livewire:status.index/>
    </p>
@endsection

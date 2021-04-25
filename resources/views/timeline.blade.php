@extends('layouts.app', ['title' => 'Your Timeline'])

@section('content')
    <div class="p-6">
        <livewire:status.create/>
        <livewire:status.index/>
    </div>
@endsection

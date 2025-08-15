@extends('Components.layout')

@section('title', 'Job Page')
@section('heading', 'Job')
@section('content')
    <div class="p-5">
        <h2 class="fw-bold fs-3">{{ $job['title'] }}</h2>
        <p>This job pays {{ $job['salary'] }} per year.</p>
    </div>
@endsection
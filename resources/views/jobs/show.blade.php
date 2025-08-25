@extends('Components.layout')

@section('title', 'Job Page')
@section('heading', 'Job')
@section('content')
    <div class="p-5">
        <h2 class="fw-bold fs-3">{{ $job->title }}</h2>
        <p>This job pays {{ $job->salary }} per year.</p>

        @can('edit-job', $job)
        <p class="d-flex justify-content-start mt-4">
            <x-button href="{{ route('jobs.edit', $job->id) }}">
                Edit Job
            </x-button>
        </p>
        @endcan

    </div>
@endsection
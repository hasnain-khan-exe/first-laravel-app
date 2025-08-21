@extends('Components.layout')

@section('title', 'Edit a Job Page')
@section('heading')
    {{-- @section('heading', 'Edit Job: ' . $job->title) --}}
    {{-- @section('heading', "Edit Job: $job->title") --}}
    <div>
        <h1>Edit Job:
            <a href="{{ route('jobs.show', $job->id) }}"
                class="text-primary fs-2 text-decoration-none">{{ $job->title }}</a>
        </h1>
    </div>
@endsection
@section('content')
    <form action='{{ route("jobs.update", $job->id) }}' method="POST" class="d-flex flex-column gap-3 px-5">

        @csrf
        @method('PATCH')

        <div class="d-flex flex-column gap-4 mt-5" style="width: 500px;">

            <x-form-field>
                <x-form-label for="title">Title</x-form-label>
                <x-form-input id="title" name="title" placeholder="CEO" value="{{ $job->title }}" />
                <x-form-error name="title" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="salary">Salary</x-form-label>
                <x-form-input id="salary" name="salary" placeholder="$ USD" value="{{ $job->salary }}" />
                <x-form-error name="salary" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="industry">Industry</x-form-label>
                <x-form-input id="industry" name="industry" placeholder="Tech, Textile, Film, Medical, Telco"
                    value="{{ $job->industry }}" />
                <x-form-error name="industry" />
            </x-form-field>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-between mt-3">
            <div class="d-flex align-items-center">
                <button form="delete-job-form" class="btn text-danger fs-6 fw-bold">Delete</button>
            </div>
            <div class="d-flex gap-5">
                <a href="/jobs/{{ $job->id }}" class="btn btn-outline-secondary px-4">Cancel</a>
                <div>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
        </div>
    </form>

    <form action='{{ route("jobs.destroy", $job->id) }}' method="POST" class="hidden" id="delete-job-form">
        @csrf
        @method('DELETE')
    </form>

@endsection
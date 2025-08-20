@extends('Components.layout')

@section('title', 'Edit a Job Page')
@section('heading')
    {{-- @section('heading', 'Edit Job: ' . $job->title) --}}
    {{-- @section('heading', "Edit Job: $job->title") --}}
    <div>
        <h1>Edit Job:
            <span class="text-primary fs-2">{{ $job->title }}</span>
        </h1>
    </div>
@endsection
@section('content')
    <form action='{{ route("jobs.update", $job->id) }}' method="POST" class="d-flex flex-column gap-3 px-5">

        @csrf
        @method('PATCH')

        <div class="d-flex flex-column gap-4 mt-5" style="width: 500px;">
            <div>
                <label for="title" class="form-label fs-5">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Job Title"
                    value="{{ $job->title }}" required>
                @error('title')
                    <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label fs-5">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="$ USD"
                    value="{{ $job->salary }}" required>
                @error('salary')
                    <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="industry" class="form-label fs-5">Industry</label>
                <input type="text" class="form-control" id="industry" name="industry"
                    placeholder="Tech, Textile, Film, Medical, Telco" value="{{ $job->industry }}" required>
                @error('industry')
                    <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-between mt-3">
            <div class="d-flex align-items-center">
                <button form="delete-job-form" class="btn text-danger fs-6 fw-bold">Delete</button>
            </div>
            <div class="d-flex gap-5">
                <a href="/jobs/{{ $job->id }}" class="btn btn-outline-secondary px-4">Cancel</a>
                <div>
                    <button type="submit" class="btn btn-primary px-4 rounded-3">Update</button>
                </div>
            </div>
        </div>
    </form>

    <form action='{{ route("jobs.destroy", $job->id) }}' method="POST" class="hidden" id="delete-job-form">
        @csrf
        @method('DELETE')
    </form>

@endsection
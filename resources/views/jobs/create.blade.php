@extends('Components.layout')

@section('title', 'Create a Job Page')
@section('heading', 'Create a Job')
@section('content')

    <form action="{{ route('jobs.store')}}" method="POST" class="d-flex flex-column gap-3 px-5">

        @csrf
        <div>
            <h2 class="mb-2 fw-bold mt-5">Create a New Job</h2>
            <p class="text-muted mb-4">We just need a handful of details from you.</p>
        </div>

        <div class="d-flex flex-column gap-4" style="width: 500px;">
            <div>
                <label for="title" class="form-label fs-5">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Job Title" required>
                @error('title')
                    <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="salary" class="form-label fs-5">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="$ USD" required>
                @error('salary')
                <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="industry" class="form-label fs-5">Industry</label>
                <input type="text" class="form-control" id="industry" name="industry" placeholder="Tech, Textile, Film, Medical, Telco" required>
                @error('industry')
                <p class="text-danger fw-semibold">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-end mt-3 gap-5">
            <a href="/" class="btn btn-outline-secondary px-4">Cancel</a>
            <button type="submit" class="btn btn-primary px-4">Save</button>
        </div>
    </form>

@endsection
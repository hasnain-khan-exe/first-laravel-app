@extends('Components.layout')

@section('title', 'Create a Job Page')
@section('heading', 'Create a Job')
@section('content')

    <form action="{{ route('jobs.store')}}" method="POST" class="d-flex flex-column gap-3 my-5 ps-5" style="max-width: 700px;">

        @csrf

        <h2 class="mb-2 fw-bold">Create a New Job</h2>
        <p class="text-muted mb-4">We just need a handful of details from you.</p>

        <div class="mb-3">
            <label for="title" class="form-label fw-semibold">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Job Title" required>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label fw-semibold">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" placeholder="$ USD" required>
        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-end gap-2 mt-4">
            <button type="submit" class="btn btn-primary mx-5 px-4">Save</button>
            <a href="/" class="btn btn-outline-secondary px-4">Cancel</a>
        </div>
    </form>

@endsection
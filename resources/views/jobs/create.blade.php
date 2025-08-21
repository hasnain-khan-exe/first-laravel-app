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
            <x-form-field>
                <x-form-label for="title">Title</x-form-label>
                <x-form-input id="title" name="title" placeholder="CEO" />
                <x-form-error name="title" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="salary">Salary</x-form-label>
                <x-form-input id="salary" name="salary" placeholder="$ USD" />
                <x-form-error name="salary" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="industry">Industry</x-form-label>
                <x-form-input id="industry" name="industry" placeholder="Tech, Textile, Film, Medical, Telco" />
                <x-form-error name="industry" />
            </x-form-field>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-end mt-3 gap-5">
            <a href="/" class="btn btn-outline-secondary px-4">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

@endsection
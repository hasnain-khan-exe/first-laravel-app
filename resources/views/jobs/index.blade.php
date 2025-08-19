@extends('Components.layout')

@section('title', 'Jobs Page')
@section('heading', 'Jobs Listing Page')
@section('content')
    <div class="px-5 d-flex flex-column gap-3" style="padding-top: 1.5rem; padding-bottom: 1.5rem;">
        @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', $job->id) }}" class="px-3 d-block border border-secondary-subtle text-dark text-decoration-none"
                style="padding-top: 1.5rem; padding-bottom: 1.5rem; border-radius: 0.5rem;">
                <div class="fw-bold small" style="color: #3b82f6;">{{$job->employer->name}}</div>
                <div>
                    <strong>{{$job['title']}}</strong>
                    pays {{$job['salary']}} per year.
                </div>
                <div class="d-flex flex-row gap-3 justify-content-end">
                    <div class="text-muted fw-bold"  style="color: #67c0e6 !important;">
                        Industry:
                    </div>
                    <div>
                        {{ $job['industry'] }}
                    </div>
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }} <!-- pagination directive -->
        </div>
    </div>
@endsection
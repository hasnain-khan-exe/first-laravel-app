@extends('Components.layout')

@section('title', 'Jobs Page')
@section('heading', 'Jobs Listing Page')
@section('content')
        <div class="px-5 d-flex flex-column gap-3" style="padding-top: 1.5rem; padding-bottom: 1.5rem;">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}"
                    class="px-3 d-block border border-secondary-subtle text-dark text-decoration-none"
                    style="padding-top: 1.5rem; padding-bottom: 1.5rem; border-radius: 0.5rem;">
                    <div class="fw-bold small" style="color: #3b82f6;">{{$job->employer->name}}</div>
                    <div>
                        <strong>{{$job['title']}}</strong>
                        pays {{$job['salary']}} per year.
                    </div>
                </a>
            @endforeach
            <div>
                {{ $jobs->links() }}
            </div>
        </div>
@endsection
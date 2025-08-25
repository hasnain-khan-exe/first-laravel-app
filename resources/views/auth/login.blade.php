@extends('Components.layout')

@section('title', 'Log In')
@section('heading', 'Log In')
@section('content')

    <form action="/login" method="POST" class="d-flex flex-column gap-3 px-5">

        @csrf

        <div class="d-flex flex-column gap-4 mt-5" style="width: 500px;">
            <x-form-field class="mb-3">
                <x-form-label for="email">Email Address</x-form-label>
                <x-form-input id="email" name="email" :value="old('email')" type="email" required />
                <x-form-error name="email" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input id="password" name="password" type="password" required />
                <x-form-error name="password" />
            </x-form-field>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-end mt-3 gap-5">
            <a href="/" class="btn btn-outline-secondary px-4">Cancel</a>
            <x-form-button type="submit">Log In</x-form-button>
        </div>
    </form>

@endsection
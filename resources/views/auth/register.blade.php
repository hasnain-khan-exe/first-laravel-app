@extends('Components.layout')

@section('title', 'Register')
@section('heading', 'Register')
@section('content')

    <form action="/register" method="POST" class="d-flex flex-column gap-3 px-5">

        @csrf

        <div class="d-flex flex-column gap-4 mt-5" style="width: 500px;">
            <x-form-field>
                <x-form-label for="first_name">First Name</x-form-label>
                <x-form-input id="first_name" name="first_name" required />
                <x-form-error name="first_name" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="last_name">Last Name</x-form-label>
                <x-form-input id="last_name" name="last_name" required />
                <x-form-error name="last_name" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="email">Email Address</x-form-label>
                <x-form-input id="email" name="email" type="email" required />
                <x-form-error name="email" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input id="password" name="password" type="password" required />
                <x-form-error name="password" />
            </x-form-field>

            <x-form-field class="mb-3">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />
                <x-form-error name="password_confirmation" />
                {{-- <div id="passwordError" class="text-danger fw-semibold d-none">
                    Passwords do not match.
                </div> --}}
            </x-form-field>

        </div>

        <hr class="border border-dark border-1">

        <div class="d-flex justify-content-end mt-3 gap-5">
            <a href="/" class="btn btn-outline-secondary px-4">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
    {{-- <script>
        const password = document.getElementById('password');
        const confirm = document.getElementById('password_confirmation');
        const errorMsg = document.getElementById('passwordError');

        // attach listener only when confirm field is clicked
        confirm.addEventListener('focus', () => {
            if (password.value) { // only start if password has some text
                confirm.addEventListener('input', () => {
                    if (confirm.value && confirm.value !== password.value) {
                        errorMsg.classList.remove('d-none'); // show error
                    } else {
                        errorMsg.classList.add('d-none'); // hide error
                    }
                });
            }
        });
    </script> --}}
@endsection
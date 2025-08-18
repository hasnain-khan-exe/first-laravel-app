<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body style="background-color: #f3f4f6">
    <nav class="py-2 bg-body-tertiary border-bottom bg-dark text light">
        <div class="container-fluid px-5 d-flex flex-wrap">
            <div class="flex-shrink-0 me-5">
                <img src="{{ asset('images/logo-triangle.svg') }}" alt="App Logo" class="mt-3" style="width: 32px; height: 32px;">
            </div>
            <ul class="fs-3 gap-1 nav me-auto">
                <li class="nav-item"><a href="/" class="nav-link link-body-emphasis px-2 active"
                        aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/jobs" class="nav-link link-body-emphasis px-2">Jobs</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link link-body-emphasis px-2">Contact</a></li>
            </ul>
            <div class="flex-shrink-0 dropdown mt-2"> <a href="#"
                    class="fs-5 d-flex align-items-center justify-content-center text-decoration-none dropdown-toggle " data-bs-toggle="dropdown"
                    aria-expanded="false"> <img src="https://assets.laracasts.com/images/mascot/larydefault.svg" alt="mdo" width="40" height="40"
                        class="rounded-circle"> </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="py-3 px-5 shadow bg-white">
        <div class="d-flex flex-wrap justify-content-between ">
            <h1>@yield('heading', 'Home')</h1>
            <x-button class="ms-auto" href="/jobs/create">
                @yield('button', 'Create Job')
            </x-button>
        </div>
    </header>
    <main class= "h-100">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
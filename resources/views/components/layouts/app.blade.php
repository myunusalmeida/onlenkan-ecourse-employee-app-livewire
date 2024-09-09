<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/boxicons-2.1.4/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg py-4 border-bottom bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href=".">EmployeeApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-0 ms-md-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('dashboard') }}" wire:navigate>
                            <i class="bx bx-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('karyawan*') ? 'active' : '' }}"
                            href="{{ route('karyawan') }}" wire:navigate>
                            <i class="bx bx-user-pin"></i> Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('posisi-pekerjaan*') ? 'active' : '' }}"
                            href="{{ route('posisi-pekerjaan') }}" wire:navigate>
                            <i class='bx bx-objects-horizontal-left'></i> Posisi Pekerjaan
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <p class="mb-0 text-dark">Hi, Yunus Almeida</p>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </section>

    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

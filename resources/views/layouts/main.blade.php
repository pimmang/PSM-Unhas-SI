<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kearsipan PSM Unhas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body class="d-flex">
    <div class="sidebar">
        <div class="d-flex gap-1 align-items-center header mb-3">
            <i class="ph-fill ph-user-circle"></i>
            <div>
                <h6 class="fw-bold">Selamat Datang</h6>
                <p>Admin</p>
            </div>
        </div>
        <h6 class="menu mb-3">Menu</h6>
        <div class="menu-item d-flex flex-column gap-3">
            <a href="/admin/partitur" class="menu-item d-flex gap-2 align-items-center {{ $status == 'partitur'? 'active':'' }}">
                <i class="ph ph-scroll"></i>
                <p class={{ $status == 'partitur'? 'active':'' }}>Partitur</p>
            </a>
            <a href="/admin/kostum" class="menu-item d-flex gap-2 align-items-center  {{ $status == 'kostum'? 'active':'' }}">
                <i class="ph ph-t-shirt"></i>
                <p>Kostum</p>
            </a>
            <a href="/admin/sertifikat" class="menu-item d-flex gap-2 align-items-center  {{ $status == 'sertifikat'? 'active':'' }}">
                <i class="ph ph-angular-logo"></i>
                <p>Sertifikat</p>
            </a>
            <a href="/admin/surat" class="menu-item d-flex gap-2 align-items-center  {{ $status == 'surat'? 'active':'' }}">
                <i class="ph ph-envelope"></i>
                <p>Surat</p>
            </a>
            <a href="/admin/sk" class="menu-item d-flex gap-2 align-items-center  {{ $status == 'sk'? 'active':'' }}">
                <i class="ph ph-article"></i>
                <p>SK</p>
            </a>
            <a href="/admin/akun" class="menu-item d-flex gap-2 align-items-center  {{ $status == 'akun'? 'active':'' }}">
                <i class="ph ph-user"></i>
                <p>Akun</p>
            </a>
        </div>
    </div>

    <div class="right">
        @yield('right')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>

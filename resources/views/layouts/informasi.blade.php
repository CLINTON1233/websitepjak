<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Kalkulator PPh 21 | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('PBL-25/images/favicon.png') }}">
    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('PBL-25/js/kalkulator.js') }}"></script>
</head>

<body>
    <header>
        @include('components.header_informasi')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('components.footer_informasi')
    </footer>
</body>

</html>
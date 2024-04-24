<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pajak | Sudut Pajak </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('PBL-25/images/favicon.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>

<body>
    <header>
        @include('components.header_layanan')
    </header>

    <main>
        @yield('content')
    </main>


    <footer>
        @include('components.footer_layanan')
    </footer>
</body>

</html>
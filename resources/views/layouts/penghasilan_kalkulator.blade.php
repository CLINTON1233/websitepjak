<!DOCTYPE html>
<html>

<head>
    <title>Home | Sudut Pajak </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('PBL-25/images/favicon.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    @yield('content')

    <footer>
        @include('components.footer')
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>

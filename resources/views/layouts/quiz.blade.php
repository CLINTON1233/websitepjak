<!DOCTYPE html>
<html>

<head>
    <title>Quiz Pajak | Sudut Pajak </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('PBL-25/images/favicon.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>

<body>
    <header>
        @include('components.header_quiz')
    </header>

    @yield('content')

    <footer>
        @include('components.footer_quiz')
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
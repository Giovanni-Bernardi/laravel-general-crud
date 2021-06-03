<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIOVANNI'S League</title>
    {{-- ccs --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>

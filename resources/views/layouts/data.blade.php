<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSS --}}
    @include('includes.client.css')

    <title>Cari Data Alumni | Sistem Informasi Data Alumni Bekerja</title>
</head>

<body>
    
    {{-- Navbar --}}
    @include('includes.client.navbar')

    {{-- Header --}}
    @include('includes.client.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.client.footer')
    
</body>

</html>
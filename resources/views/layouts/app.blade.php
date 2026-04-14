<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    @include('partials.navbar')

    <div class="p-5">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
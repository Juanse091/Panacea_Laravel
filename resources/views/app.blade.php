<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'PanaceaNova Pharmacy') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css"
        referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    <style>
        * {
            margin: 0;
            padding: 0;
        }

    </style>
    <script>
          window.authUser = @json(auth()->user()); // Esto pasa el usuario autenticado al cliente en forma de JSON
    </script>
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>

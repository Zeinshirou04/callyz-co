<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ba0903e616.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }} | Open Desgin Commision</title>
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>

    <main>
        @yield('container')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
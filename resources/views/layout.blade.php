<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Site')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <nav class="container">
        <ul class="nav nav-tabs">
            <li>
                <a href="/">Home</a>
            </li>

            <li>
                <a href="/about">About</a>
            </li>

            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="container" id="pjax-container">
        @yield('content')
    </div>

    <h4 class="text-center">{{ time() }}</h4>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <script>
        $(document).pjax('a', '#pjax-container');
    </script>
</body>
</html>
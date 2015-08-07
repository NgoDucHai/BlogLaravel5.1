<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Content</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        @include('content.partials.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
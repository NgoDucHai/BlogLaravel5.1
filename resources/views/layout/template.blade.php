<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
   @include('admin.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
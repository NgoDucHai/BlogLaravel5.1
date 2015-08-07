<!-- resources/views/auth/register.blade.php -->


<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Register</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="container">

            <form class="form-register" method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <h2 class="form-signin-heading">Please add register informations</h2>
                <div>
                    Name
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>

                <div>
                    Email
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" class="form-control" name="password">
                </div>

                <div>
                    Confirm Password
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                </div>
            </form>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>



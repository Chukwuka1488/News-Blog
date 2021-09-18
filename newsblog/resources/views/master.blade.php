<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Blog</title>
</head>

<body>
    @section('sidebar')
    <p>This is parent/Master Page</p>
    @show

    <div>
        @yield('component')
    </div>
</body>

</html>
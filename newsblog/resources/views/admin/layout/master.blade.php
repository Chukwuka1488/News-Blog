<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.top')
</head>

<body>
    <!-- nav bar  -->
    @include('admin.layout.navbar')
    <!-- // nav bar  -->

    <!-- content section  -->
    @yield('content')
    <!-- // content section  -->


    <!-- js files  -->
    @include('admin.layout.bottom')
    <!-- // js files  -->
</body>

</html>
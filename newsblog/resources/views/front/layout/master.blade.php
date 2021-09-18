<!DOCTYPE html>
<html lang="en">

<head>
  @include('front.layout.top')
</head>

<body>
  <!-- nav bar  -->
  @include('front.layout.navbar')
  <!-- // nav bar  -->

  <!-- content section  -->
  @yield('content')
  <!-- // content section  -->

  <!-- footer -->
  @include('front.layout.footer')
  <!-- // footer -->

  <!-- js files  -->
  @include('front.layout.bottom')
  <!-- // js files  -->
</body>

</html>
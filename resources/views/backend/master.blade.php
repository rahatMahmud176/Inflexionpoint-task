<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
@include('backend.includes.styles')
 
</head>

<body>

@include('backend.includes.header')

<!-- ======= Sidebar ======= -->
@include('backend.includes.sidebar')
 

  <main id="main" class="main">

     

    <section class="section dashboard">
      @yield('content')
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('backend.includes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('backend.includes.scripts')
 @include('vendor.lara-izitoast.toast')

</body>

</html>
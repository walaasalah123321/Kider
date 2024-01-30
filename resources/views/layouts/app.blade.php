<!DOCTYPE html>
<html lang="en">

<head>
  @include("Kidder.includes.head")
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
      
        <!-- Spinner End -->


        <!-- Navbar Start -->
       @include("Kidder.includes.Navbar")
        <!-- Navbar End -->

        @yield("content")
       <!-- Footer Start -->
       <!-- Footer End -->


       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   </div>

  @include("Kidder.includes.FooterJs")
</body>

</html>
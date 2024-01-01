<!DOCTYPE html>
<html lang="en">

<head>
  @include("Kidder.includes.head")
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
       @include("Kidder.includes.Navbar")
        <!-- Navbar End -->


        <!-- Carousel Start -->
       @include("Kidder.includes.Carousel")
        <!-- Carousel End -->


        <!-- Facilities Start -->
      @include("Kidder.includes.Facilities")
        <!-- Facilities End -->


        <!-- About Start -->
       @include("Kidder.includes.About")
        <!-- About End -->


        <!-- Call To Action Start -->
        @include("Kidder.includes.Call")
        <!-- Call To Action End -->


        <!-- Classes Start -->
       @include("Kidder.includes.Classes")
        <!-- Classes End -->


        <!-- Appointment Start -->
       @include("Kidder.includes.Appointment")
        <!-- Appointment End -->


        <!-- Team Start -->
       @include("Kidder.includes.Team")
        <!-- Team End -->


        <!-- Testimonial Start -->
       @include("Kidder.includes.Testimonial")
        <!-- Testimonial End -->


        <!-- Footer Start -->
      @include("Kidder.includes.Footer")
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   @include("Kidder.includes.FooterJs")
</body>

</html>
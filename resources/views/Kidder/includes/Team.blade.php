<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Popular Teachers</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            @foreach ( $teacher as $teacher)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <img class="img-fluid rounded-circle w-75" src="{{asset('admin/Teacher/images/'.$teacher->image)}}" alt="">
                    <div class="team-text">
                        <h3>{{$teacher->name}}</h3>
                        <p>{{$teacher->position}}</p>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-square btn-primary mx-1" href="{{$teacher->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary  mx-1" href="{{$teacher->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary  mx-1" href="{{$teacher->instagram}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</div>
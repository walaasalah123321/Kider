<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Our Clients Say!</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            @foreach ( $data as $data )
              
            <div class="testimonial-item bg-light rounded p-5">
                <p class="fs-5">{{$data->opinion}}</p>
                <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('admin/testimonial/images/'.$data->image)}}" style="width: 90px; height: 90px;">
                    <div class="ps-3">
                        <h3 class="mb-1">{{$data->name}}</h3>
                        <span>{{$data->postion}}</span>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                </div>
            </div>
            @endforeach
          
            
        </div>
    </div>
</div>
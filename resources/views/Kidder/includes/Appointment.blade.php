<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">Make Appointment</h1>
                        <form action="{{route('Admin.Appointment.store')}}" method="POST" >
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name" name="Gurdian_name">
                                        <label for="gname">Gurdian Name</label>
                                    </div>
                                    @error("Gurdian_name")
                                        <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email" name="Gurdian_email">
                                        <label for="gmail">Gurdian Email</label>
                                    </div>
                                    @error("Gurdian_email")
                                    <p style="color: red">{{$message}}</p>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cname" placeholder="Child Name" name="Child_name">
                                        <label for="cname">Child Name</label>
                                    </div>
                                    @error("Child_name")
                                    <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cage" placeholder="Child Age" name="Child_age">
                                        <label for="cage">Child Age</label>
                                    </div>
                                    @error("Child_age")
                                    <p style="color: red">{{$message}}</p>
                                @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    @error("message")
                                    <p style="color: red">{{$message}}</p>
                                @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/img/appointment.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
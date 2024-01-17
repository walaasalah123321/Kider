@extends("admin.layouts.index",["namePage"=>"Show Appointment"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Appointment Details </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form >
             
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Gurdian_name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name"  value="{{$appointment->Gurdian_name}}" disabled>
              </div>
             
              <div class="form-group">
                <label for="exampleInputPassword1">Gurdian_email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Position" name="postion"  value="{{$appointment->Gurdian_email}}" disabled>
              </div>
             
              <div class="form-group">
                  <label for="exampleInputPassword1">Child Name</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter opinion" name="opinion"  value="{{$appointment->Child_name}}" disabled>
              </div>
            
              
              <div class="form-group">
                <label for="exampleInputPassword1">Child age</label>
                <input type="text" class="form-control"  value="{{$appointment->Child_age}}" disabled>
            </div>
             
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." disabled="">{{$appointment->message}}</textarea>
            </div>
            
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{route("Admin.Appointment.showAll")}}" class="btn btn-primary">Back</a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      
    
      <!--/.col (right) -->
    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
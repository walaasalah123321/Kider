@extends("admin.layouts.index",["namePage"=>"Show Message"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Message Details </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form >
             
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="name"  value="{{$message->name}}" disabled>
              </div>
             
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control"   value="{{$message->email}}" disabled>
              </div>
             
              <div class="form-group">
                  <label for="exampleInputPassword1">Subject</label>
                  <input type="text" class="form-control" id="exampleInputPassword1"    value="{{$message->subject}}" disabled>
              </div>
            
              
             
             
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..." disabled="">{{$message->message}}</textarea>
            </div>
            
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="{{route('Admin.Contact.showAll')}}" class="btn btn-primary">Back</a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      
    
      <!--/.col (right) -->
    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
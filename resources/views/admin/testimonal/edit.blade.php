@extends("admin.layouts.index",["namePage"=>"edit Testmonial"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Testmonial</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{route('Admin.Testmonial.update',[$data->id])}}" enctype="multipart/form-data">
              @csrf
              @method("PUT")
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name"  value="{{$data->name}}">
              </div>
              @error("name")
                <p style="color: red">{{$message}}</p>
              @enderror
              <div class="form-group">
                <label for="exampleInputPassword1">Postion</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Position" name="postion"  value="{{$data->postion}}">
              </div>
              @error("postion")
              <p style="color: red">{{$message}}</p>
            @enderror
              <div class="form-group">
                  <label for="exampleInputPassword1">opinion</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter opinion" name="opinion"  value="{{$data->opinion}}">
              </div>
              @error("opinion")
              <p style="color: red">{{$message}}</p>
              @enderror
              
              <div class="form-group">
                <label for="exampleInputFile">Enter Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image"  value="{{$data->image}}">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div>
                <img style="width:140px;height:100px" src="{{asset('admin/testimonial/images/'.$data->image)}}" alt=""> 

              </div>
              @error("image")
              <p style="color: red">{{$message}}</p>
             @enderror
            
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      
    
      <!--/.col (right) -->
    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
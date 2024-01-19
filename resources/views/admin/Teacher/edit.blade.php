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
            <h3 class="card-title">Edit Teacher</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
         
          <form method="POST" action="{{route('Admin.Teacher.update',[$Teacher->id])}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name"  value="{{$Teacher->name}}">
            </div>
            @error("name")
              <p style="color: red">{{$message}}</p>
            @enderror
            <div class="form-group">
              <label for="exampleInputPassword1">Position</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Position" name="position"  value="{{$Teacher->position}}" >
            </div>
            @error("postion")
            <p style="color: red">{{$message}}</p>
          @enderror
            <div class="form-group">
                <label for="exampleInputPassword1">Facebook</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your facebook" name="facebook"  value="{{$Teacher->facebook}}">
            </div>
            @error("facebook")
            <p style="color: red">{{$message}}</p>
            @enderror
            <div class="form-group">
              <label for="exampleInputPassword1">instagram</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter instagram" name="instagram"  value="{{$Teacher->instagram}}">
          </div>
          @error("instagram")
          <p style="color: red">{{$message}}</p>
          @enderror
          <div class="form-group">
            <label for="exampleInputPassword1">twitter</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter twitter" name="twitter"  value="{{$Teacher->twitter}}">
        </div>
        @error("instagram")
        <p style="color: red">{{$message}}</p>
        @enderror
            <div class="form-group">
              <label for="exampleInputFile">Enter Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <img style="width:140px;height:100px" src="{{asset('admin/Teacher/images/'.$Teacher->image)}}" alt=""> 

            @error("image")
            <p style="color: red">{{$message}}</p>
           @enderror
           <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publish" @checked($Teacher->publish)>
            <label class="form-check-label" for="exampleCheck1">publish </label>
          </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
        </div>
        <!-- /.card -->

      
    
      <!--/.col (right) -->
    </div>
  </div><!-- /.container-fluid -->
</section>

@endsection
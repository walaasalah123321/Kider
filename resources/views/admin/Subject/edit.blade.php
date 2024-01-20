@extends("admin.layouts.index",["namePage"=>"Create Subject"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Subject</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{route('Admin.Subject.update',[$subject->id])}}" enctype="multipart/form-data">
              @csrf
              @method("PUT")
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="title"  value="{{$subject->title}}">
              </div>
              @error("Title")
                <p style="color: red">{{$message}}</p>
              @enderror
              <div class="form-group">
                <label for="exampleInputPassword1">Capacity</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Capacity" name="Capacity"  value="{{$subject->Capacity}}" >
              </div>
              @error("Capacity")
              <p style="color: red">{{$message}}</p>
            @enderror

              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="exampleInputPassword1" >Start Age</label>

                    <input type="text" class="form-control" placeholder="Start Age" name="StartAge" value="{{$subject->StartAge}}">
                  </div>
                  @error("StartAge")
                  <p style="color: red">{{$message}}</p>
                  @enderror
                       
                  <div class="col-6">
                    <label for="exampleInputPassword1">End Age</label>

                    <input type="text" class="form-control" placeholder="End Age"  name="EndAge" value="{{$subject->EndAge}}">
                  </div>
                  @error("EndAge")
                  <p style="color: red">{{$message}}</p>
                  @enderror
                 
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                
                  <div class="col-6">
                    <label for="exampleInputPassword1">Start Time</label>
                    <input type="time" class="form-control" placeholder="Start Time" name="StartTime" value="{{$subject->StartTime}}">
                  </div>
                  @error("StartTime")
                  <p style="color: red">{{$message}}</p>
                   @enderror
                  <div class="col-6">
                    <label for="exampleInputPassword1">End Time</label>
                    <input type="time" class="form-control" placeholder="End Time" name="EndTime" value="{{$subject->EndTime}}">

                  </div>
                  @error("EndTime")
                  <p style="color: red">{{$message}}</p>
                   @enderror
                </div>
              </div>
             
              <div class="form-group">
                  <label for="exampleInputPassword1">Salary</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Salary" name="Salary"  value="{{$subject->Salary}}">
              </div>
              @error("Salary")
              <p style="color: rgb(53, 7, 7)(53, 7, 7)">{{$message}}</p>
              @enderror
        
              <div class="form-group">
                <label  for="exampleCheck1">Teacher name</label>
                <select class="form-control " style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="Teacher_id">
                  
                  @foreach ($teachers as $teacher)
                  <option data-select2-id="34" value="{{$teacher->id}}" @selected($subject->id == $teacher->id)>{{$teacher->name}}</option>
                    
                  @endforeach
                 
                </select>
              </div>
              @error("Teacher_id")
              <p style="color: rgb(53, 7, 7)(53, 7, 7)">{{$message}}</p>
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
            <img style="width:140px;height:100px" src="{{asset('admin/Subject/images/'.$subject->image)}}" alt=""> 

              @error("image")
              <p style="color: red">{{$message}}</p>
             @enderror
            
             <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publish" @checked($subject->publish)>
              <label class="form-check-label" for="exampleCheck1" >publish </label>
            </div>
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
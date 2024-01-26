@extends("admin.layouts.index",["namePage"=>"All Teacher"])
@section("content")
  <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-header">
          <h3 class="card-title">All Teacher</h3>

          <div class="card-tools">
          <form action="{{URL::CURRENT()}}" method="GET">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text"  class="form-control float-right" placeholder="Search" name="search" value="{{Request()->search}}">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="card-body pb-0">
          <div class="row">
            @foreach ($teachers as $teacher)
              
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
               
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead">Name : <b>  {{$teacher->name}}</b></h2>
                      <h4 class="lead">Position :<b>{{$teacher->position}}</b></h4>
                      <h4 class="lead">Social Link   

                      
                      <a href="{{$teacher->facebook}}" class="btn btn-sm btn-success" target="_Black">
                        <i class="fab fa-facebook"></i>
                      </a>
                      <a href="{{$teacher->instagram}}" class="btn btn-sm btn-success" target="_Black">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <a href="{{$teacher->twitter}}" class="btn btn-sm btn-success" target="_Black">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </h4>

                    <h4 class="lead">Published : <b>{!!($teacher->publish)?"<i class='fas fa-check'></i>":"<i class='fas fa-times'></i>"!!}</b></h4>

                    
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('admin/Teacher/images/'.$teacher->image)}}" alt="user-avatar" class="img-circle img-fluid w-50">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">    
                    <a href="{{route('Admin.Teacher.edit',[$teacher->id])}}" class="btn btn-sm btn-success"> Edit
                    </a>
                    <a data-confirm-delete="true" href="{{route('Admin.Teacher.delete',[$teacher->id])}}" class="btn btn-sm btn-danger">
                       Delete
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

        
           
          </div>
        </div>
        <!-- /.card-body -->
       
      <div>  {{$teachers->withQueryString()->links()}}</div>

  
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
@endsection
@extends("admin.layouts.index",["namePage"=>"All Testmonial"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All testimonial</h3>

            <div class="card-tools">

              <form action="{{URL::CURRENT()}}" method="GET" >
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search" name="table_search" value="{{Request()->search}}">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>number</th>
                  <th>User</th>
                  <th>postion</th>
                  <th>opinion</th>
                  {{-- <th>image</th> --}}
                  <th>edit</th>
                  <th>delete</th>

                </tr>
              </thead>
              <tbody>
    
                @foreach ($data as $key=>$user )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->postion}}</td>

                    <td>{{$user->opinion}}</td>
                  <td> <a  class="btn  btn-success" href="{{ route('Admin.Testmonial.edit', [$user->id]) }}">edit</a></td>

                    <td> <a type="button" class="btn btn-danger" data-confirm-delete="true" href="{{ route('Admin.Testmonial.delete', [$user->id]) }}">delete</a></td>
                </tr>  
                @endforeach
              
              
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@extends("admin.layouts.index",["namePage"=>"All Appointment"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Appointment</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>Gurdian_name </th>
                  <th>Gurdian_email</th>
                  <th>child_name</th>
                  <th>child_age</th>
                  <th>show</th>
                  <th>delete</th>
                </tr>
              </thead>
              <tbody>
    
                @foreach ($data as $user )
                <tr>
                   
                    <td>{{$user->Gurdian_name}}</td>
                    <td>{{$user->Gurdian_email}}</td>
                    <td>{{$user->Child_name}}</td>
                    <td>{{$user->Child_age}}</td>
                  <td> <a  class="btn  btn-success" href="{{ route('Admin.Appointment.show', [$user->id]) }}">show</a></td>

                    <td> <a type="button" class="btn btn-danger" data-confirm-delete="true" href="{{ route('Admin.Appointment.delete', [$user->id]) }}">delete</a></td>
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
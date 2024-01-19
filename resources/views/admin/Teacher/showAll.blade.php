@extends("admin.layouts.index",["namePage"=>"All Teacher"])
@section("content")
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Teacher</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Position</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Facebook</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">twitter</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">instagram</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">publish</th>
                    <th >Edit</th>
                    <th >Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  
            
                  
               @foreach ( $teacher as $teacher)
               <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">{{$teacher->name}}</td>
                <td>{{$teacher->position}}</td>
                <td>{{$teacher->facebook}}</td>
                <td>{{$teacher->twitter}}</td>
                <td>{{$teacher->instagram}}</td>
             
                <td class="sorting_1 dtr-control">{{($teacher->publish)?"YES":"NO"}}</td>
                <th ><a href="{{route('Admin.Teacher.edit',[$teacher->id])}}" class="btn btn-success" >Edit</a></th>
                <th ><a href="{{route('Admin.Teacher.delete',[$teacher->id])}}" class="btn btn-danger" data-confirm-delete="true">Delete</a></th>
              </tr>
               @endforeach                  
                </tbody>
                 
                </table>
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection
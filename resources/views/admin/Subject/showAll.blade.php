@extends("admin.layouts.index",["namePage"=>"All Subject"])
@section("content")
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Subject</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Title</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Capacity</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Salary</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">StartAge - EndAge</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">StartTime - EndTime</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">TeacherName</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">publish</th>
                    <th >Edit</th>
                    <th >Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  
            
                  
               @foreach ( $teacher as $teacher)
               <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">{{$teacher->title}}</td>
                <td>{{$teacher->Capacity}}</td>
                <td>{{$teacher->Salary}}</td>
                <td>{{$teacher->StartAge}}-{{$teacher->EndAge}}</td>
                <td>{{$teacher->StartTime}}-{{$teacher->EndTime}}</td>
                <td>{{$teacher->teachers->name}}</td>
                <td class="sorting_1 dtr-control">{{($teacher->publish)?"YES":"NO"}}</td>
                <th ><a href="{{route("Admin.Subject.edit",[$teacher->id])}}" class="btn btn-success" >Edit</a></th>
                <th ><a href="{{route('Admin.Subject.delete',[$teacher->id])}}" class="btn btn-danger" data-confirm-delete="true">Delete</a></th>
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
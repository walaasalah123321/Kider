@extends("admin.layouts.index",["namePage"=>" Contact messages"])
@section("content")
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card" style="height:78vh">
          <div class="card-header">
            <h3 class="card-title">All Contact messages</h3>

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
                  <th>User Name </th>
                  <th>User Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Show</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
    
                @foreach ($message as $message)
                <tr class="text-bold">
                   
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->message}}</td>
                  <td> <a  class="btn  btn-success" href="{{ route("Admin.Contact.show", [$message->id]) }}">show</a></td>

                    <td> <a type="button" class="btn btn-danger" data-confirm-delete="true" href="{{ route('Admin.Contact.delete', [$message->id]) }}">delete</a></td>
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
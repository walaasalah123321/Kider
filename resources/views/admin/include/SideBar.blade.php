<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-decoration-none"> {{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  {{Request()->routeIs("Admin.Testmonial.create","Admin.Testmonial.show")?'menu-open':''}}">
            <a href="#" class="nav-link  {{Request()->routeIs("Admin.Testmonial.create","Admin.Testmonial.show")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testimonil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Admin.Testmonial.create')}}" class="nav-link {{Request()->routeIs("Admin.Testmonial.create")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Admin.Testmonial.show')}}" class="nav-link {{Request()->routeIs("Admin.Testmonial.show")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonal</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Teacher.create","Admin.Teacher.show")?'menu-open':''}}">
            <a href="#" class="nav-link  {{Request()->routeIs("Admin.Teacher.create","Admin.Teacher.show")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Admin.Teacher.create')}}" class="nav-link {{Request()->routeIs("Admin.Teacher.create")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Admin.Teacher.show')}}" class="nav-link {{Request()->routeIs("Admin.Teacher.show")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Teacher</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Subject.create","Admin.Subject.show")?'menu-open':''}}">
            <a href="#" class="nav-link  {{Request()->routeIs("Admin.Subject.create","Admin.Subject.show")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Classes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Admin.Subject.create')}}" class="nav-link {{Request()->routeIs("Admin.Subject.create")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Admin.Subject.show')}}" class="nav-link {{Request()->routeIs("Admin.Subject.show")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Subject</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Appointment.showAll")?'menu-open':''}}">
            <a href="{{route('Admin.Appointment.showAll')}}" class="nav-link  {{Request()->routeIs("Admin.Appointment.showAll")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                All Apointment
              </p>
            </a>
           
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Contact.showAll")?'menu-open':''}}">
            <a href="{{route('Admin.Contact.showAll')}}" class="nav-link  {{Request()->routeIs("Admin.Contact.showAll")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact Messages

              </p>
            </a>
           
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Contact.unread")?'menu-open':''}}">
            <a href="{{route('Admin.Contact.unread')}}" class="nav-link  {{Request()->routeIs("Admin.Contact.unread")?'active':''}}">
              <div class="d-flex justify-content-between">
               <div>
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Unread Message
                </p></div>
              <h5>{{$unread}}</h5>
              </div>
            
            </a>
           
          </li>
      
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
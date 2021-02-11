<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('project/index') }}">
        
        <div class="sidebar-brand-icon " >
         <img src="{{ asset('logo.png') }}" class="card-img-top" alt="...">
        </div>
        <div class="sidebar-brand-text mx-3" ><h6><strong>BOM</strong></h6></div>
      </a>

    <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
    <!-- Divider -->
      <hr class="sidebar-divider">

    <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active 
       
        ">
          <a class="nav-link" href="{{ url('project/index')}}">
            
            <span ><h6><strong>Project</strong></h6></span></a>
        </li>
         <!-- Nav Item - Dashboard -->
      <li class="nav-item active {{ Request::is('part') ? 'bg-warning' : '' }}
                                ">
        <a class="nav-link" href="{{ url('/part') }}">
          
          <span><h6><strong>Part</strong></h6></span></a>
      </li> 
     
    
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
   
        

 
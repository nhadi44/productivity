<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-header"></li>
      <li class="nav-item" >
        <a href="{{url('/home-admin')}}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
     {{-- Next Menu 1 --}}
      <li class="nav-header" style="padding-top: 18px">DATA PROCESSING</li>
      <li class="nav-item">
        <a href="{{url('/employee')}}" class="nav-link">
          <i class="nav-icon fas fa-database"></i>
          <p>
            Employee Data
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon far fa-file"></i>
          <p>
            Report Data
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/data-management')}}" class="nav-link">
          <i class="nav-icon fas fa-pen-square"></i>
          <p>
            Data Management
          </p>
        </a>
      </li>
    {{-- End of Menu 1 --}}
    {{-- Next Menu 2 --}}
      <li class="nav-header">SETTINGS</li>
      <li class="nav-item">
        <a href="{{url('/umadmin')}}" class="nav-link">
          <i class="nav-icon fas fa-user-cog"></i>
          <p>
            User Management
          </p>
        </a>
        <li class="nav-item">
          <a href="{{url('/reset-password')}}" class="nav-link">
            <i class="nav-icon fas fa-key"></i>
            <p>
              Reset Password
            </p>
          </a>
      </li>
      {{-- <li class="nav-item">
         <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          <button class="btn btn-primary">Sasda</button>
        </form>
      </li>
    {{-- End Of Menu 2 --}}
    </ul>
  </nav>
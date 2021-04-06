<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-header"></li>
      <li class="nav-item" >
        <a href="{{url('/supervisor')}}" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-header">DATA PROCESSING</li>
     {{-- Next Menu 1 --}}
      {{-- <li class="nav-item">
        <a href="{{url('/report-staff')}}" class="nav-link">
          <i class="nav-icon far fa-file"></i>
          <p>
            Report
          </p>
        </a>
      </li> --}}
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Report</p>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="{{url('/report-productivity')}}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>Productivity Report</p>
        </a>
      </li> --}}
    {{-- End of Menu 1 --}}
    {{-- Next Menu 2 --}}
      <li class="nav-header">SETTINGS</li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-key"></i>
            <p>
              Reset Password
            </p>
          </a>
      </li>
    {{-- End Of Menu 2 --}}
    </ul>
  </nav>
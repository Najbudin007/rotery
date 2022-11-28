  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  @if (auth()->user()->image)
                      <img src="{{ asset('profile/' . auth()->user()->image) }}" class="img-circle elevation-2"
                          alt="User Image">
                  @endif
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name }}</a>
              </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="#" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <a href="" class="nav-link">
                              <i class="nav-icon fas fa-arrow-right"></i>
                              <button>
                                  Log Out
                              </button>
                          </a>
                      </form>
                  </li>
                  {{-- <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Users
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('user.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>User</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/charts/flot.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Flot</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/charts/inline.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inline</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="pages/charts/uplot.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>uPlot</p>
                              </a>
                          </li>
                      </ul>
                  </li> --}}


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

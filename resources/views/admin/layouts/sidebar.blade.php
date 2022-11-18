  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->


      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name ?? 'user' }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item menu-open">
                      <a href="{{ route('dashboard') }}" class="nav-link active">
                          <i class="nav-icon fas fa-chart-line"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>

                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-user"></i>
                          <p>
                              Users
                              <i class="right fas fa-angle-right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('user.index') }}" class="nav-link">
                                  {{-- <i class="fas fa-thin fa-user nav-icon"></i> --}}
                                  <p>User</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-check"></i>
                          <p>
                              Roles & Permissions
                              <i class="fas fa-angle-right right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('role.index') }}" class="nav-link">
                                  <p>Roles</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('permission.index') }}" class="nav-link">
                                  <p>Permission</p>
                              </a>
                          </li>


                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-image"></i>
                          <p>
                              Gallery
                              <i class="right fas fa-angle-right right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('gallery-folder.index') }}" class="nav-link">
                                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                                  <p>Folder</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas  fa-bars"></i>
                          <p>
                              Projects
                              <i class="fas fa-angle-right right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('project-type.index') }}" class="nav-link">
                                  <p>Project Types</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('project.index') }}" class="nav-link">
                                  <p>Project</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('slider.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-paperclip "></i>
                          <p>
                              Sliders
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('notice.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-bell"></i>
                          <p>
                              Notice
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('testimonial.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-id-badge"></i>
                          <p>
                              Testimonial
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('news.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              News
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('aboutUs.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-info-circle"></i>
                          <p>
                              AboutUs
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('contactForm.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-message"></i>
                          <p>
                              All Messages
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('mail.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-envelope"></i>
                          <p>
                              Mails
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('setting.create') }}" class="nav-link">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Site Setting
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

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

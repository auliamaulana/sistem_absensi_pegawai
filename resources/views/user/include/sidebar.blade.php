
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="/dashboard-user"
              aria-expanded="false"
              ><i class="mdi mdi-view-dashboard"></i
              ><span class="hide-menu">Dashboard</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="/absensi-user"
              aria-expanded="false"
              ><i class="mdi mdi-chart-bar"></i
              ><span class="hide-menu">Absensi</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-account-key"></i
              ><span class="hide-menu">Settings</span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="authentication-login.html" class="sidebar-link"
                  ><i class="mdi mdi-account"></i
                  ><span class="hide-menu">Profile</span></a
                >
              </li>
              <form action="/logout" method="post">
                @csrf
                  <i class="fa fa-power-off me-1 ms-1"></i>
                  <button type="submit" name="submit">
                  logout
                  </button>
              </form>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>


  <div class="page-wrapper bg-white p-3">
      @yield('container')
    </div>

      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="17">
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="17">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.BlogSection')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Blog Sections</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.blog')}}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Blogs</span>
                        </a>
                    </li> <!-- end Dashboard Menu -->
                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
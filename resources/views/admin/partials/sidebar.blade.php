<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="/global_assets\images\demo\users\face11.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Victoria Baker</div>

                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="{{route("admin.home")}}" class="nav-link {{Route::currentRouteName() == 'admin.home' ? 'active' : ''}}">
                        <i class="icon-home4"></i>
                        <span>
									Dashboard
								</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route("admin.user.index")}}" class="nav-link {{Route::currentRouteName() == 'admin.user.index' ? 'active' : ''}}">
                        <i class="icon-user"></i>
                        <span>
									User
								</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route("admin.category.index")}}" class="nav-link {{Route::currentRouteName() == 'admin.category.index' ? 'active' : ''}}">
                        <i class="icon-user"></i>
                        <span>
									Category
								</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route("admin.logout")}}" class="nav-link">
                        <i class="icon-user"></i>
                        <span>
									Logout
								</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>

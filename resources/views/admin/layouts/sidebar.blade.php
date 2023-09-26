  <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('admin_assets/app-assets/images/backgrounds/02.jpg')}}">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('admin/dashboard')}}"><img class="brand-logo" alt="Chameleon admin logo" src="https://ui-avatars.com/api/?name=Ever+New&background=f24f4f&color=fff" />
                         <h3 class="brand-text">Evernew Salon</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Students</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('add.student')}}">Add Student</a>
                        </li>
                        <li><a class="menu-item" href="{{ route('all.student')}}">All Students</a>
                        </li>
                      
                    </ul>
                </li>
              <li class=" nav-item"><a href="{{ route('all.contacts')}}"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Contact Form Data</span></a>
                </li>
               
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
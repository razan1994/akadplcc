<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('super_admin.dashboard') }}" title="Dashboard">

                <span class="brand-name text-truncate"> Rushetta Dashboard </span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <ul class="nav sidebar-inner" id="sidebar-menu">

                {{-- Dashboard --}}
                {{-- <li class="active">
                    <a class="sidenav-item-link" href="{{ route('welcome') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="nav-text" style="font-size: 9pt;">Visit Site</span>
                    </a>
                </li> --}}
                {{-- Dashboard --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('super_admin.dashboard') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="nav-text" style="font-size: 9pt;">Dashboard</span>
                    </a>
                </li>

                {{-- Contact Us --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#linkages" aria-expanded="false" aria-controls="contactUs">
                        <i class="fas fa-id-card"></i>
                        <span class="nav-text" style="font-size: 9pt;"> Linkages</span> <b
                            class="caret"></b>
                    </a>
                    <ul class="collapse" id="linkages" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.specialities-index') }}">
                                    <i class="fas fa-id-card"></i>
                                    <span class="nav-text" style="font-size: 9pt;"> Doctor Specialities</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Users --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#user"
                        aria-expanded="false" aria-controls="user">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text" style="font-size: 9pt;">Users</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="user" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Super Admin') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Admin Users </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Insurance Company') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Insurance </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Hospital') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Hospital </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Radiology Center') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Radiology Center </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Medical Center') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Medical Center </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Lab') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Lab </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Doctor') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Doctor </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Patient') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Patient </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Pharmacy') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Pharmacy </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','SEO Admin') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> SEO Admin </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Gym') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Gym </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index','Life Coach') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> Life Coach </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>




                {{-- Website Layout --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#job"
                        aria-expanded="false" aria-controls="job">
                        <i class="fas fa-briefcase"> </i>
                        <span class="nav-text" style="font-size: 9pt;"> Website Layout </span> <b
                            class="caret"></b>
                    </a>
                    <ul class="collapse" id="job" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> Blogs </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.about_us-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> About Us </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.sliders-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> Slider</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.term_and_conditions-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> Term & Conditions</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.privacy_policies-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> Privacy Policy</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Contact Us --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#contactUs" aria-expanded="false" aria-controls="contactUs">
                        <i class="fas fa-id-card"></i>
                        <span class="nav-text" style="font-size: 9pt;"> Contact Us</span> <b
                            class="caret"></b>
                    </a>
                    <ul class="collapse" id="contactUs" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.contact_us-index') }}">
                                    <i class="fas fa-id-card"></i>
                                    <span class="nav-text" style="font-size: 9pt;"> Contact Us Info</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.contact_us-requests') }}">
                                    <i class="fas fa-id-card"></i>
                                    <span class="nav-text"> Contact Messages</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Support Tickets --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('super_admin.support_tickets-index') }}">
                        <i class="mdi mdi-settings-outline"></i>
                        <span class="nav-text" style="font-size: 9pt;">Support Tickets</span>
                    </a>
                </li>

                {{-- Logout : --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>
                        <span class="nav-text" style="font-size: 9pt;">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>

    </div>
</aside>

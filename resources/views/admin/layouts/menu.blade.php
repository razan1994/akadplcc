<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('super_admin.dashboard') }}" title="Dashboard">
                {{-- <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg> --}}
                {{-- <img height="33" width="30" src="{{ asset('images_default/blueray_logo.jpg') }}" alt=""> --}}
                <span class="brand-name text-truncate"> JmeGoods </span>
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
                                <a class="sidenav-item-link" href="{{ route('super_admin.users-index') }}">
                                    <span class="nav-text" style="font-size: 9pt;"><i class="mdi mdi-account-group"></i> All Users</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Shop --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#advertising" aria-expanded="false" aria-controls="advertising">
                        <i class="fas fa-store"></i>
                        <span class="nav-text" style="font-size: 9pt;">Shop</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="advertising" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.superCategories-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Super Categories </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.mainCategories-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Main Categories </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.subCategories-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Sub Categories </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.products-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Products </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.colors-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Colors </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.sizes-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Sizes </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.brands-index') }}">
                                    <span class="nav-text"> <i class="fas fa-store"></i> Brands </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.orders-index') }}">
                                    <span class="nav-text"> <i class="fas fa-magic"></i> Orders </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Promo Codes --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#promo_code" aria-expanded="false" aria-controls="promo_code">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-text" style="font-size: 9pt;">Promo Codes</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="promo_code" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.promo_codes-index') }}">
                                    <span class="nav-text"> <i class="fas fa-wallet"></i> Promo Codes </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.products-index') }}">
                                    <span class="nav-text"> <i class="fas fa-wallet"></i> Used Promo Code </span>
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
                                <a class="sidenav-item-link" href="{{ route('super_admin.banners-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> Banners</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.faqs-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="nav-text" style="font-size: 9pt;"> FAQ</span>
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

<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('super_admin.dashboard') }}" title="Dashboard">

                <span class="brand-name text-truncate"> Kanaf Dashboard </span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <ul class="nav sidebar-inner" id="sidebar-menu">

                {{-- Dashboard --}}
                {{-- <li class="active">
                    <a class="sidenav-item-link" href="{{ route('welcome') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Visit Site</span>
                    </a>
                </li> --}}
                {{-- Dashboard --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('super_admin.dashboard') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Dashboard</span>
                    </a>
                </li>


                {{-- Users --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#user"
                        aria-expanded="false" aria-controls="user">
                        <i class="mdi mdi-account-group"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Users</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="user" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.users-index', 'Super Admin') }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Admin Users
                                    </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Students --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#students" aria-expanded="false" aria-controls="students">
                        <i class="mdi mdi-account-group"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Students</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="students" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.students.index') }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> All Students
                                    </span>
                                </a>

                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.students.requested-subscriptions') }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Subscription requests
                                    </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>


                {{-- Website Layout --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#cources"
                        aria-expanded="false" aria-controls="job">
                        <i class="fas fa-briefcase"> </i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Cources </span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="cources" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.cources-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> All Cources </span>
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
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Website Layout </span> <b
                            class="caret"></b>
                    </a>
                    <ul class="collapse" id="job" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Blogs </span>
                                </a>
                            </li>
                            {{-- <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.latest_news-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Latest News </span>
                                </a>
                            </li> --}}
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.about_us-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> About Us </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.sliders-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Slider</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.banners.index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Banners</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.approved_bodies-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Approved Bodies</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.term_and_conditions-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Term & Conditions</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.privacy_policies-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Privacy Policy</span>
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
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Contact Us</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="contactUs" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.contact_us-index') }}">
                                    <i class="fas fa-id-card"></i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Contact Us Info</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.contact_us-requests') }}">
                                    <i class="fas fa-id-card"></i>
                                    <span class="pl-1 nav-text"> Contact Messages</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Wallets --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#wallets" aria-expanded="false" aria-controls="wallets">
                        <i class="fas fa-briefcase"> </i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Wallets </span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="wallets" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.payment_wallets.index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Payment Wallets </span>
                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.withdrawals.orders', ['type' => 'wallet' ,'status'=>'pending']) }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Wallet withdrawals
                                    </span>
                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.withdrawals.orders', ['type' => 'paypal' ,'status'=>'pending']) }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Paypal withdrawals
                                    </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Public Values --}}
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#public_values" aria-expanded="false" aria-controls="public_values">
                        <i class="fas fa-briefcase"> </i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Public values </span> <b
                            class="caret"></b>
                    </a>
                    <ul class="collapse" id="public_values" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.public_values-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Index </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Support Tickets --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('super_admin.support_tickets-index') }}">
                        <i class="mdi mdi-settings-outline"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Support Tickets</span>
                    </a>
                </li>

                {{-- Logout : --}}
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>

    </div>
</aside>

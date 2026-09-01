<style>
    /* Minimal Sidebar for Advertising School */
    .modern-sidebar {
        background: #fff;
        border-radius: 8px;
        box-shadow: none;
        padding: 10px 0 10px 0;
        border: 1px solid #f0f0f0;
        min-width: 220px;
        font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    }

    .modern-sidebar-inner {
        padding: 0 8px;
    }

    .modern-app-brand {
        background: transparent;
        border-radius: 8px;
        margin: 0 0 12px 0;
        padding: 12px 0 8px 0;
        text-align: left;
        box-shadow: none;
        border: none;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .modern-brand-name {
        color: #22223b;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 0.2px;
        text-shadow: none;
        margin-left: 2px;
    }

    .modern-sidebar-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .modern-menu-item {
        margin-bottom: 4px;
        border-radius: 6px;
        transition: background 0.15s;
    }

    /* .modern-menu-item.active, .modern-menu-item:hover {
    background: #e3edff;
} */
    .modern-link {
        display: flex;
        align-items: center;
        padding: 9px 14px;
        color: #22223b;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 6px;
        text-decoration: none;
        transition: color 0.15s, background 0.15s;
        background: transparent;
        gap: 10px;
    }

    .modern-link:hover,
    .modern-link:focus {
        color: #2563eb;
        background: #e3edff;
    }

    .modern-menu-item.active .modern-link {
        color: #2563eb;
    }

    .modern-icon {
        font-size: 1.1rem;
        margin-right: 0;
        color: #2563eb;
        transition: color 0.15s;
    }

    .modern-menu-item.active .modern-icon,
    .modern-menu-item:hover .modern-icon {
        color: #2563eb;
    }

    .modern-nav-text {
        font-size: 1rem !important;
        color: #22223b !important;
        font-weight: 500;
        letter-spacing: 0.1px;
    }

    .modern-menu-item.active .modern-nav-text,
    .modern-menu-item:hover .modern-nav-text {
        color: #2563eb !important;
    }

    .modern-badge {
        background: #2563eb !important;
        color: #fff !important;
        font-weight: bold;
        border-radius: 6px;
        padding: 2px 8px;
        font-size: 0.85em;
        box-shadow: none;
    }

    .modern-submenu-item {
        margin: 0;
        padding: 0;
    }

    .modern-submenu-item .modern-link {
        padding-left: 28px;
        font-size: 0.97rem;
        color: #22223b;
        background: transparent;
    }

    .modern-submenu-item .modern-link:hover {
        color: #2563eb;
        background: #e3edff;
    }

    .modern-menu-item.active .modern-submenu-item .modern-link {
        color: #2563eb;
    }

    .modern-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #e3edff #fff;
    }

    .modern-scrollbar::-webkit-scrollbar {
        width: 8px;
        background: #fff;
    }

    .modern-scrollbar::-webkit-scrollbar-thumb {
        background: #e3edff;
        border-radius: 6px;
    }

    /* Show submenu on hover for sidebar */
    .has-sub:hover>ul.collapse,
    .has-sub:focus-within>ul.collapse {
        display: block !important;
        height: auto !important;
        visibility: visible !important;
        opacity: 1 !important;
        z-index: 1000;
    }
</style>
<aside class="left-sidebar bg-sidebar modern-sidebar">
    <div id="sidebar" class="sidebar modern-sidebar-inner">
        <!-- Aplication Brand -->
        <div class="app-brand modern-app-brand">
            <a href="{{ route('super_admin.dashboard') }}" title="Dashboard">
                <span class="brand-name text-truncate modern-brand-name">Advertising School Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar modern-scrollbar">
            <ul class="nav sidebar-inner modern-sidebar-list" id="sidebar-menu">

                {{-- Dashboard --}}
                {{-- <li class="active">
                    <a class="sidenav-item-link" href="{{ route('welcome') }}">
                        <i class="mdi mdi-desktop-mac-dashboard"></i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;">Visit Site</span>
                    </a>
                </li> --}}
                {{-- Dashboard --}}
                <li class="active modern-menu-item">
                    <a class="sidenav-item-link modern-link" href="{{ route('super_admin.dashboard') }}">
                        <i class="mdi mdi-desktop-mac-dashboard modern-icon"></i>
                        <span class="pl-1 nav-text modern-nav-text">Dashboard</span>
                    </a>
                </li>


                {{-- Users --}}
                <li class="has-sub active expand modern-menu-item">
                    <a class="sidenav-item-link modern-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#user" aria-expanded="false" aria-controls="user">
                        <i class="mdi mdi-account-group modern-icon"></i>
                        <span class="pl-1 nav-text modern-nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="user" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active modern-submenu-item">
                                <a class="sidenav-item-link modern-link"
                                    href="{{ route('super_admin.users-index', 'Super Admin') }}">
                                    <i class="mdi mdi-account-group modern-icon"></i><span
                                        class="pl-1 nav-text modern-nav-text"> Admin Users</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                {{-- Students --}}
                <li class="has-sub active expand modern-menu-item">
                    <a class="sidenav-item-link modern-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#students" aria-expanded="false" aria-controls="students">
                        <i class="mdi mdi-account-group modern-icon"></i>

                        <span class="pl-1 nav-text modern-nav-text">
                            Students
                            <span class="ml-2 badge badge-danger modern-badge">{{ $newSubsciptionRequests }}</span>
                        </span>

                        <b class="caret"></b>
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
                                        style="font-size: 9pt;"> Subscription requests @if ($newSubsciptionRequests)
                                            <small>({{ $newSubsciptionRequests }})</small>
                                        @endif
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
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#blogs"
                        aria-expanded="false" aria-controls="blogs">
                        <i class="fas fa-briefcase"> </i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Blogs </span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="blogs" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            {{-- <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.categories.index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Categories </span>
                                </a>
                            </li> --}}
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;"> Blogs </span>
                                </a>
                            </li>
                        </div>
                    </ul>
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#job"
                        aria-expanded="false" aria-controls="job">
                        <i class="fas fa-briefcase"> </i>
                        <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;"> Website Layout
                        </span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="job" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.researches.index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;">
                                        Researches </span>
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
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;"> About
                                        Us </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.sliders-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;">
                                        Slider</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.banners.index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;">
                                        Banners</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('super_admin.approved_bodies-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;">
                                        Approved Bodies</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.term_and_conditions-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;"> Term &
                                        Conditions</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.privacy_policies-index') }}">
                                    <i class="fas fa-briefcase"> </i>
                                    <span class="pl-1 nav-text" style="font-size: 9pt;color:white !important;">
                                        Privacy Policy</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#gallery-menu" aria-expanded="false" aria-controls="gallery-menu">
                        <i class="mdi mdi-image-multiple"></i>
                        <span class="nav-text">Gallery</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="gallery-menu" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li><a class="sidenav-item-link" href="{{ route('super_admin.gallery-index') }}"><span
                                        class="nav-text">All Gallery Items</span></a></li>
                            <li><a class="sidenav-item-link" href="{{ route('super_admin.gallery-create') }}"><span
                                        class="nav-text">Add New</span></a></li>
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
                        <span class="pl-1 nav-text" style="font-size: 9pt;"> Wallets
                            <span
                                class="ml-2 badge badge-danger">{{ (int) $newWalletWithdrawRequests + (int) $newPaypalWithdrawRequests }}</span>
                        </span> <b class="caret"></b>
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
                                    href="{{ route('super_admin.withdrawals.orders', ['type' => 'wallet', 'status' => 'pending']) }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Wallet withdrawals @if ($newWalletWithdrawRequests)
                                            <small>({{ $newWalletWithdrawRequests }})</small>
                                        @endif
                                    </span>
                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link"
                                    href="{{ route('super_admin.withdrawals.orders', ['type' => 'paypal', 'status' => 'pending']) }}">
                                    <i class="mdi mdi-account-group"></i><span class="pl-1 nav-text"
                                        style="font-size: 9pt;"> Paypal withdrawals @if ($newPaypalWithdrawRequests)
                                            <small>({{ $newPaypalWithdrawRequests }})</small>
                                        @endif
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

<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
                {{-- <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i> --}}
                {{-- </button> --}}
                <input type="text" name="query" id="search-input" class="form-control" autofocus autocomplete="off"
                    disabled />
            </div>
            {{-- <div id="search-results-container">
                <ul id="search-results"></ul>
            </div> --}}
        </div>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                {{-- ===================================================================== --}}
                {{-- ======================== Notifications Section ====================== --}}
                {{-- ===================================================================== --}}
                {{-- <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">You have 5 notifications</li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-plus"></i> New user registered
                                <span class="float-right  font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-remove"></i> User deleted
                                <span class="float-right  font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 07 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                <span class="float-right  font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 12 PM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-supervisor"></i> New client
                                <span class="float-right  font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-server-network-off"></i> Server overloaded
                                <span class="float-right  font-size-12 d-inline-block"><i
                                        class="mdi mdi-clock-outline"></i> 05 AM</span>
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a class="text-center" href="#"> View All </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- ===================================================================== --}}
                {{-- =========================== Setting Section ========================= --}}
                {{-- ===================================================================== --}}
                <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                </li>

                {{-- ===================================================================== --}}
                {{-- ============================ User Account =========================== --}}
                {{-- ===================================================================== --}}
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        @if (isset(auth()->user()->profile_photo_path))
                            @if (auth()->user()->profile_photo_path && file_exists(auth()->user()->profile_photo_path))
                                <img src="{{ asset(auth()->user()->profile_photo_path) }}" class="user-image"
                                    alt="User Image" />
                            @else
                                <img src="{{ asset('front_end_style/images/profilesf.png') }}" class="user-image"
                                    alt="User Image" />
                            @endif
                        @else
                            <img src="{{ asset('front_end_style/images/profilesf.png') }}" class="user-image"
                                alt="User Image" />
                        @endif
                        <span
                            class="d-none d-lg-inline-block">{{ isset(auth()->user()->name_en) ? auth()->user()->name_en : 'Undefined' }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- User image -->
                        <li class="dropdown-header">
                            @if (isset(auth()->user()->profile_photo_path))
                                @if (auth()->user()->profile_photo_path && file_exists(auth()->user()->profile_photo_path))
                                    <img src="{{ asset(auth()->user()->profile_photo_path) }}" class="img-circle"
                                        alt="User Image" />
                                @else
                                    <img src="{{ asset('front_end_style/images/profilesf.png') }}" class="img-circle"
                                        alt="User Image" />
                                @endif
                            @else
                                <img src="{{ asset('front_end_style/images/profilesf.png') }}" class="img-circle"
                                    alt="User Image" />
                            @endif

                            <div class="d-inline-block">
                                {{ isset(auth()->user()->name_en) ? auth()->user()->name_en : 'Undefined' }} <small
                                    class="pt-1">{{ isset(auth()->user()->email) ? auth()->user()->email : 'Undefined' }}</small>
                            </div>
                        </li>

                        <li>
                            <a href="{{ route('super_admin.users-show', [auth()->user()->id, 'Super Admin']) }}">
                                <i class="mdi mdi-account"></i> Profile
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#">
                                <i class="mdi mdi-email"></i> Message
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                        </li>
                        <li class="right-sidebar-in">
                            <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                        </li> --}}

                        <li class="dropdown-footer">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                                    class="mdi mdi-logout"></i> Logout </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>


</header>


<div>
    @if (session()->has('success'))
        <script>
            swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                button: "OK",
            });
        </script>
    @endif
    @if (session()->has('danger'))
        <script>
            swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                button: "Close",
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            // Function to format errors as an unordered list
            function formatErrors(errors) {
                let html = '<ul >';
                errors.forEach(error => {
                    html += '<li>' + error + '</li>';
                });
                html += '</ul>';
                return html;
            }

            // Extract errors and format them
            let errors = {!! json_encode($errors->all()) !!};
            let errorHtml = formatErrors(errors);

            // Show SweetAlert with formatted errors
            swal({
                title: "Validation Error",
                content: {
                    element: "div",
                    attributes: {
                        innerHTML: errorHtml
                    }
                },
                icon: "error",
                button: "Close",
            });
        </script>
    @endif
</div>

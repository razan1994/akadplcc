@extends('admin.layouts.app')

{{-- @section('admin_css')
    <link href="{{ asset('resources/dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('resources/dashboard_files/assets/css/sleek.min.css') }}">
@endsection --}}

@section('content')

    {{-- ============================================== --}}
    {{-- ================== Header ==================== --}}
    {{-- ============================================== --}}
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1><i class="mdi mdi-account-multiple"></i> User Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="p-0 breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.dashboard') }}">
                            <i class="mdi mdi-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.users-index') }}">
                            <i class="mdi mdi-account-group"></i> All Users
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-account-multiple"></i> User Details
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('super_admin.users-create') }}" class="mb-1 btn btn-primary"><i
                    class="mdi mdi-playlist-plus"></i> Add New </a>
        </div>
    </div>

    <div class="bg-white border rounded">
        <div class="row no-gutters">

            {{-- =========================================================== --}}
            {{-- ================== Sweet Alert Section ==================== --}}
            {{-- =========================================================== --}}
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
            </div>

            {{-- ================================================================================================= --}}
            {{-- ========================================= Left Section ========================================= --}}
            {{-- ================================================================================================= --}}
            <div class="col-lg-4 col-xl-3">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="px-0 text-center border-0 card widget-profile">
                        <div class="mx-auto card-img rounded-circle">
                            @if (isset($user->profile_photo_path))
                                @if ($user->profile_photo_path && file_exists($user->profile_photo_path))
                                    <img src="{{ asset($user->profile_photo_path) }}" width="100" alt="user image">
                                @else
                                    <img src="{{ asset('front_end_style/images/profilesf.png') }}" width="100"
                                        alt="user image">
                                @endif
                            @else
                                <img src="{{ asset('front_end_style/images/profilesf.png') }}" width="100"
                                    alt="user image">
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="py-2 text-dark"><i class="mdi mdi-account"></i> {!! isset($user->name_ar) ? $user->name_ar : "<span style='color:red;'>Undefined</span>" !!}</h5>

                            @if (auth()->user()->id == $user->id)
                                <a class="my-4 btn btn-primary btn-pill btn-sm"
                                    href="{{ isset($user->id) ? route('super_admin.users-edit', [$user->id]) : '#' }}">Update
                                    User Profile <i class="mdi mdi-update"></i></a>
                            @endif
                        </div>

                    </div>

                    <hr class="w-100">
                    <div class="pt-4 contact-info">
                        <h6 class="text-dark"><i class="mdi mdi-contacts"></i> Contact Information :</h6>
                        <hr>
                        <h5 class="text-dark"></h5>
                        <p class="pt-4 mb-2 text-dark font-weight-medium"><i class="mdi mdi-email"></i> Email : </p>
                        <p style="color: blue;">{!! isset($user->email) ? $user->email : "<span style='color:red;'>Undefined</span>" !!}</p>
                        <p class="pt-4 mb-2 text-dark font-weight-medium"><i class="mdi mdi-phone"></i> Phone :</p>
                        <p style="color: blue;">{!! isset($user->phone) ? $user->phone : "<span style='color:red;'>Undefined</span>" !!}</p>
                        <p class="pt-4 mb-2 text-dark font-weight-medium"><i class="mdi mdi-contacts"></i> Username :</p>
                        <p style="color: blue;">{!! isset($user->username) ? $user->username : "<span style='color:red;'>Undefined</span>" !!}</p>

                        <p class="pt-4 mb-2 text-dark font-weight-medium"><i class="mdi mdi-account-switch"></i> User Status
                            :</p>
                        <p style="color: blue;">{!! isset($user->user_status) ? $user->user_status : "<span style='color:red;'>Undefined</span>" !!}</p>
                    </div>
                </div>
            </div>

            {{-- ================================================================================================= --}}
            {{-- ========================================== Right Section ========================================= --}}
            {{-- ================================================================================================= --}}
            <div class="col-lg-8 col-xl-9">
                <div class="py-5 profile-content-right">
                    {{-- ================================================================================================= --}}
                    {{-- ===================================== Tabs Titles Section ======================================= --}}
                    {{-- ================================================================================================= --}}
                    <ul class="px-3 nav nav-tabs px-xl-5 nav-style-border" id="myTab" role="tablist">
                        {{-- User Profile Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#tab_1" role="tab"
                                aria-controls="timeline" aria-selected="true"><i class="mdi mdi-account-box"></i>
                                Profile</a>
                        </li>

                        {{-- User Activity log Tab Title --}}
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_2" role="tab"
                                aria-controls="profile" aria-selected="false"><i class="mdi mdi-currency-usd"></i> Activity
                                log</a>
                        </li>
                    </ul>

                    {{-- ================================================================================================= --}}
                    {{-- ===================================== Tabs Bodies Section ======================================= --}}
                    {{-- ================================================================================================= --}}
                    <div class="px-3 tab-content px-xl-5" id="myTabContent">

                        {{-- ============================================================================== --}}
                        {{-- =========================== User Profile Tab Body ============================ --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel"
                            aria-labelledby="timeline-tab">
                            {{-- ============================================== --}}
                            {{-- =========== Main User Information ============ --}}
                            {{-- ============================================== --}}
                            <div class="mt-3 media profile-timeline-media">
                                <div class="media-body">
                                    <h3 class="py-3 text-dark"><i class="mdi mdi-information"></i> Main User Information :
                                    </h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><i class="mdi mdi-account"></i> Name : <span
                                                        style="color:blue;">{!! isset($user->name_ar) ? $user->name_ar : '<span style="color:red;">Undefined</span>' !!}</span></th>

                                                <th><i class="mdi mdi-account"></i> Username : <span
                                                        style="color:blue;">{!! isset($user->username) ? $user->username : '<span style="color:red;">Undefined</span>' !!}</span></th>

                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-phone"></i> Phone : <span
                                                        style="color:blue;">{!! isset($user->phone) ? $user->phone : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-email"></i> Email : <span
                                                        style="color:blue;">{!! isset($user->email) ? $user->email : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                            </tr>
                                            <tr>
                                                <th><i class="mdi mdi-clock-outline mdi-spin"></i> Registered Since : <span
                                                        style="color:blue;">{!! isset($user->created_at) ? $user->created_at->diffForHumans() : '<span style="color:red;">Undefined</span>' !!}</span></th>
                                                <th><i class="mdi mdi-clock-outline mdi-spin"></i> Date & Time of
                                                    Registration : <span style="color:blue;">{!! isset($user->created_at)
                                                        ? date('Y.d.m / h:i A', strtotime($user->created_at))
                                                        : '<span style="color:red;">Undefined</span>' !!}</span>
                                                </th>
                                            </tr>

                                        </thead>
                                    </table>
                                </div>
                            </div>


                        </div>


                        {{-- ============================================================================== --}}
                        {{-- ======================== User Activity log Tab Body ========================== --}}
                        {{-- ============================================================================== --}}
                        <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <table id="hoverable-data-table_2" class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th><i class="mdi mdi-account-question"></i> Activity Type</th>
                                                    <th><i class="mdi mdi-account-question"></i> Activity Since</th>
                                                    {{-- <th><i class="mdi mdi-account-question"></i> Activity Date/Time</th> --}}
                                                    <th><i class="mdi mdi-account-question"></i> Activity Date/Time</th>
                                                    <th><i class="mdi mdi-account-question"></i> Activity Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- Super Admin --}}
                                                @if (isset($activitylogs))
                                                    @if ($activitylogs->count() > 0)
                                                        @foreach ($activitylogs->sortBy('created_at') as $index => $activitylog)
                                                            <tr>
                                                                <td>{!! isset($activitylog->activity_key_type)
                                                                    ? $activitylog->activity_key_type
                                                                    : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                <td>{!! isset($activitylog->created_at)
                                                                    ? $activitylog->created_at->diffForHumans()
                                                                    : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                {{-- <td>{!! (isset($activitylog->created_at) ?  date('Y.d.m / h:i A', strtotime($activitylog->created_at)) : "<span style='color:red;'>Undefined</span>") !!}</td> --}}
                                                                <td>{!! isset($activitylog->created_at) ? $activitylog->created_at : "<span style='color:red;'>Undefined</span>" !!}</td>
                                                                <td>
                                                                    @if (isset($activitylog->id) && isset($activitylog->related_id) && isset($activitylog->model_name))
                                                                        <a href="{{ route('super_admin.activity_logs-show', [$activitylog->id]) }}"
                                                                            title="Show"
                                                                            class="mb-1 btn btn-sm btn-primary"><i
                                                                                class="mdi mdi-eye"></i> View
                                                                            Details</a>
                                                                    @endif
                                                                    {{-- {!! isset($activitylog->related_id) && isset($activitylog->model_name) ? $activitylog->related_id : "<span style='color:red;'>Undefined</span>" !!} --}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin_javascript')
    <script>
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table_1').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [2, "desc"]
                ]
            });
            jQuery('#hoverable-data-table_2').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [2, "desc"]
                ]
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
@endsection

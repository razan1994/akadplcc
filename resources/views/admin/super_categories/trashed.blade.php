@extends('admin.layouts.app')

@section('admin_css')
    {{-- <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}"
        rel="stylesheet"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.css') }}"> --}}

@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
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

            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1><i class="fas fa-user-md"></i> All Super Categories Archived</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <i class="mdi  mdi-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.superCategories-index') }}">
                                    <i class="fas fa-spell-check"></i> All Categories
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i
                                class="mdi mdi-delete"></i> All Super Categories Archived
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>

            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    {{-- <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> طلبات سحب الرصيد : </h2> --}}
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="mdi mdi-account"></i> Name Ar</th>
                                <th><i class="mdi mdi-account"></i> Name EN</th>
                                <th><i class="mdi mdi-email"></i> Desc AR</th>
                                <th><i class="mdi mdi-email"></i> Desc EN</th>
                                <th><i class="mdi mdi-image"></i> Image</th>
                                <th><i class="mdi mdi-account-switch"></i> Status</th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($superCategories))
                                @if ($superCategories->count() > 0)
                                    @foreach ($superCategories as $index => $superCategory)
                                        <tr>
                                            <td>{!! isset($superCategory->id) ? $superCategory->id : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($superCategory->name_ar) ? $superCategory->name_ar : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($superCategory->name_en) ? $superCategory->name_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($superCategory->description_ar) ? $superCategory->description_ar : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($superCategory->description_en) ? $superCategory->description_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>
                                                @if (isset($superCategory->image) && $superCategory->image && file_exists($superCategory->image))
                                                    <img src="{{ asset($superCategory->image) }}" width="70" height="70" style="border-radius: 10px; border:solid 1px black;">
                                                @else
                                                    <img src="{{ asset('front_end_style/images/default.png') }}" width="70" height="50">
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($superCategory->status))
                                                    @if ($superCategory->status == 'Active')
                                                        <span style="color: green;">{{ isset($superCategory->status) ? $superCategory->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @else
                                                        <span style="color: red;">{{ isset($superCategory->status) ? $superCategory->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @endif
                                                @else
                                                    <span style='color:red;'>Undefined</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center">
                                                <a href="{{ route('super_admin.superCategories-softDeleteRestore', $superCategory->id) }}" class="unarchive mb-1 btn btn-sm btn-success"><i class="mdi mdi-redo-variant"></i></a>
                                                <a href="{{ route('super_admin.superCategories-destroy', [$superCategory->id]) }}" title="Permanently Delete" class="confirm mb-1 btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection

        @section('admin_javascript')
            <script>
                jQuery(document).ready(function() {
                    jQuery('#hoverable-data-table').DataTable({
                        "aLengthMenu": [
                            [20, 30, 50, 75, -1],
                            [20, 30, 50, 75, "All"]
                        ],
                        "pageLength": 20,
                        "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
                        "order": [[ 2, "desc" ]]
                    });
                });
            </script>
            <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}">
            </script>
            <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}">
            </script>

        @endsection

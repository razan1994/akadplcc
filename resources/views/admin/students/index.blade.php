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
                    <h1><i class="mdi mdi-account-multiple"></i> All Students</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-account-multiple"></i> All
                                Students</li>
                        </ol>
                    </nav>
                </div>

                <div>
                    <a href="#" class="mb-1 btn btn-primary"><i class="mdi mdi-playlist-plus"></i> Add New </a>
                </div>
            </div>

            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                    {{-- <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> طلبات سحب الرصيد : </h2> --}}
                </div>
                <div class="card-body responsive-table">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th><i class="mdi mdi-account"></i> Name AR</th> --}}
                                <th><i class="mdi mdi-account"></i> Name </th>
                                <th><i class="mdi mdi-email"></i> Email</th>
                                <th><i class="mdi mdi-phone"></i> Phone</th>
                                <th><i class="mdi mdi-account-switch"></i> User Status</th>
                                <th><i class="mdi mdi-account-switch"></i> Payment Status</th>
                                <th>
                                    Registered at
                                </th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Super Admin --}}
                            @if (isset($students))
                                @if ($students->count() > 0)
                                    @foreach ($students as $index => $student)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{!! isset($student->name) ? $student->name : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($student->email) ? $student->email : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($student->phone) ? $student->phone : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>
                                                @if (isset($student->user_status))
                                                    @if ($student->user_status == 'Active')
                                                        <span
                                                            style="color: green;">{{ isset($student->user_status) ? $student->user_status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @else
                                                        <span
                                                            style="color: red;">{{ isset($student->user_status) ? $student->user_status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @endif
                                                @else
                                                    <span style='color:red;'>Undefined</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($student->lastPayment))
                                                    @if ($student->lastPayment->status == 'accepted')
                                                        <span
                                                            style="color: green;">{{ isset($student->lastPayment->status) ? $student->lastPayment->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @elseif ($student->lastPayment->status == 'pending')
                                                        <span
                                                            style="color: orange;">{{ isset($student->lastPayment->status) ? $student->lastPayment->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @else
                                                        <span
                                                            style="color: red;">{{ isset($student->lastPayment->status) ? $student->lastPayment->status : "<span style='color:red;'>Undefined</span>" }}</span>
                                                    @endif
                                                @else
                                                    <span style='color:red;'>
                                                        Unpaid
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($student->lastPayment))
                                                    {{ $student->lastPayment->created_at->format('Y-m-d') }}
                                                @else
                                                    <span style='color:red;'>Undefined</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <a href="#" title="Show" class="mb-1 btn btn-sm btn-info"><i
                                                        class="mdi mdi-eye"></i></a> --}}
                                                {{-- <a href="#" title="Edit" class="mb-1 btn btn-sm btn-primary"><i
                                                        class="mdi mdi-playlist-edit"></i></a> --}}
                                                <a href="{{ route('super_admin.students.toggle-status', $student->id) }}"
                                                    title="Toggle status" class="mb-1 process btn btn-sm btn-warning"><i
                                                        class="mdi mdi-stop"></i>
                                                </a>
                                                @if ($student->user_status != 'Pendding')
                                                @else
                                                    <a href="#" title="Accept"
                                                        class="mb-1 process btn btn-sm btn-success"><i
                                                            class="mdi mdi-check"></i></a>
                                                    <a href="#" title="Reject"
                                                        class="mb-1 process btn btn-sm btn-danger"><i
                                                            class="mdi mdi-close"></i></a>
                                                @endif
                                                {{-- <a href="" class="mb-1 btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a> --}}
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
@endsection

@section('admin_javascript')
    <script>
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"],
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [0, "asc"]
                ]
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
@endsection

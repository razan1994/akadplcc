@extends('admin.layouts.app')





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
                    <h1> {{ $status }} subscription requests</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item"><i class="far fa-envelope"></i> {{ $status }} Subscription
                                requests</li>


                        </ol>
                    </nav>
                    <div class="mt-3">
                        @if ($status == 'pending')
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'approved') }}"
                                class="btn btn-primary btn-rounded">
                                Approved Requests
                            </a>
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'rejected') }}"
                                class="btn btn-danger btn-rounded">
                                Rejected Requests
                            </a>
                        @elseif ($status == 'approved')
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'pending') }}"
                                class="btn btn-warning btn-rounded">
                                Pending Requests
                            </a>
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'rejected') }}"
                                class="btn btn-danger btn-rounded">
                                Rejected Requests
                            </a>
                        @elseif ($status == 'rejected')
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'approved') }}"
                                class="btn btn-primary btn-rounded">
                                Approved Requests
                            </a>
                            <a href="{{ route('super_admin.students.requested-subscriptions', 'pending') }}"
                                class="btn btn-warning btn-rounded">
                                Pending Requests
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2> Subscription requests : </h2>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Full Name </th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Wallet</th>
                                <th>Message</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($requests->count() > 0)
                                @foreach ($requests as $index => $request)
                                    <tr>
                                        <td>{!! isset($request->name) ? $request->name : "<span style='color:red;'>Undefined</span>" !!} </td>
                                        <td>{!! isset($request->email) ? $request->email : "<span style='color:red;'>Undefined</span>" !!} </td>
                                        <td>{!! isset($request->phone) ? $request->phone : "<span style='color:red;'>Undefined</span>" !!} </td>
                                        <td>{!! isset($request->payment_wallet) ? $request->payment_wallet : "<span style='color:red;'>Undefined</span>" !!} </td>
                                        <td>{!! isset($request->message) ? $request->message : "<span style='color:red;'>Undefined</span>" !!} </td>
                                        <td>
                                            @if ($status == 'pending')
                                                <a href="{{ route('super_admin.students.approve-subscription-request', $request->id) }}"
                                                    onclick="return confirm('Are you sure you want to approve this request ?')"
                                                    class="mb-1 btn btn-sm btn-success"><i class="mdi mdi-check-bold"></i>
                                                </a>

                                                <a href="{{ route('super_admin.students.reject-subscription-request', $request->id) }}"
                                                    onclick="return confirm('Are you sure you want to reject this request ?')"
                                                    class="mb-1 btn btn-sm btn-danger">
                                                    <i class="mdi mdi-window-close"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('super_admin.students.delete-subscription-request', $request->id) }}"
                                                    class="mb-1 confirm btn btn-sm btn-danger">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
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
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>

@stop

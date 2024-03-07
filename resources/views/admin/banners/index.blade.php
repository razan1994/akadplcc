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
                    <h1><i class="mdi mdi-account-multiple"></i> All Banners</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-account-multiple"></i> All
                                Banners</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('super_admin.banners.create') }}" class="mb-1 btn btn-primary"><i
                            class="mdi mdi-playlist-plus"></i> Add New </a>
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
                                <th><i class="mdi mdi-account-switch"></i> Name</th>
                                <th><i class="mdi mdi-image"></i> Image</th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Super Admin --}}
                            @if (isset($banners))
                                @if ($banners->count() > 0)
                                    @foreach ($banners as $index => $banner)
                                        <tr>
                                            <td style="text-align: center">{{ $index + 1 }}</td>
                                            <td style="text-align: center">
                                                {{ isset($banner->title) ? $banner->title : 'Undefined' }}</td>
                                            <td>
                                                @if (isset($banner->image) && $banner->image && file_exists($banner->image))
                                                    <img src="{{ asset($banner->image) }}" width="120" height="50"
                                                        style="border-radius: 10px; border:solid 1px black;">
                                                @else
                                                    <img src="{{ asset('front_end_style/images/default.png') }}"
                                                        width="70" height="50">
                                                @endif
                                            </td>

                                            <td class="gap-1 d-flex">
                                                <a href="{{ route('super_admin.banners.edit', $banner->id) }}"
                                                    class="mb-1 btn btn-primary btn-sm"><i
                                                        class="mdi mdi-playlist-edit"></i>
                                                </a>
                                                <form action="{{ route('super_admin.banners.destroy', $banner->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="mx-1 btn btn-danger btn-sm delete_form"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="mdi mdi-delete-forever"></i>
                                                    </button>
                                                </form>
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
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
@endsection

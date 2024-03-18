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
                    <h1> Researches </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">All Researches</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('super_admin.researches.create') }}" class="mb-1 btn btn-primary">
                        <i class="mdi mdi-playlist-plus"></i>
                        Add New
                    </a>


                    {{-- <a href="#" class="mb-1 btn btn-danger"><i class="mdi mdi-delete"></i> Archive </a> --}}


                </div>
            </div>
            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2> List Of Researches : </h2>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i>Title </th>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i>Description </th>
                                <th style="text-align: center"><i class="far fa-question-circle"></i>Status</th>
                                <th style="text-align: center"><i class="mdi mdi-image"></i> Image </th>
                                <th style="text-align: center"><i class="mdi mdi-image"></i> File </th>
                                <th style="text-align: center"><i class="mdi mdi-clock-outline mdi-spin"></i> Date_Time
                                </th>
                                <th style="text-align: center"><i class="mdi mdi-settings mdi-spin"></i> Control </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($researches->count() > 0)
                                @foreach ($researches as $index => $researche)
                                    <tr>
                                        <td style="text-align: center">
                                            {{ isset($researche->title) ? $researche->title : 'Undefined' }}</td>
                                        <td style="text-align: center">
                                            {{ isset($researche->description) ? $researche->description : 'Undefined' }}
                                        </td>

                                        <td style="text-align: center">
                                            @if ($researche->status == 1)
                                                <span class="badge badge-success">
                                                    Published
                                                </span>
                                            @else
                                                <span class="badge badge-danger">
                                                    Not Published
                                                </span>
                                            @endif
                                        </td>
                                        @if ($researche->image && file_exists($researche->image))
                                            <td style="text-align: center">
                                                <img src="{{ asset($researche->image) }}" width="70" height="70"
                                                    style="border-radius: 10px; border:solid 1px black;">
                                                </th>
                                            @else
                                            <td style="text-align: center">
                                                <img src="{{ asset('images_default/default.jpg') }}" width="70"
                                                    height="70" style="border-radius: 10px; border:solid 1px black;">
                                                </th>
                                        @endif

                                        <td style="text-align: center">
                                            @if (file_exists($researche->file))
                                                {{ $researche->fileName }}
                                                <br>
                                                {{ isset($researche->file) ? $researche->fileType : "<span style='color:red;'>Undefined</span>" }}
                                                <br>
                                                <a href="{{ asset($researche->file) }}" download>
                                                    <i class="mdi mdi-file-pdf"></i> Download
                                                </a>
                                            @else
                                                <span style='color:red;'>Undefined</span>
                                            @endif
                                        </td>



                                        <td style="text-align: center">
                                            {{ isset($researche->created_at) ? $researche->created_at : "<span style='color:red;'>Undefined</span>" }}
                                        </td>



                                        <td style="text-align: center">
                                            <a href="{{ route('super_admin.researches.edit', $researche->id) }}"
                                                class="mb-1 btn btn-sm btn-success">
                                                <i class="mdi mdi-playlist-edit"></i>
                                            </a>
                                            @if ($researche->status == 1)
                                                <a href="{{ route('super_admin.researches.toggle', $researche->id) }}"
                                                    class="mb-1 btn btn-sm btn-warning"><i class="mdi mdi-eye-off"></i></a>
                                            @else
                                                <a href="{{ route('super_admin.researches.toggle', $researche->id) }}"
                                                    class="mb-1 btn btn-sm btn-info"><i class="mdi mdi-eye"></i></a>
                                            @endif


                                            <a href="{{ route('super_admin.researches.destroy', $researche->id) }}"
                                                class="mb-1 confirm btn btn-sm btn-danger">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
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
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
                "order": [
                    [0, "desc"]
                ]
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
@endsection

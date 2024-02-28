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
            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1> Courses </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">All Courses</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('super_admin.cources-create') }}" class="mb-1 btn btn-primary"><i
                            class="mdi mdi-playlist-plus"></i> Add New</a>


                    <a href="{{ route('super_admin.cources-showSoftDelete') }}" class="mb-1 btn btn-danger"><i
                            class="mdi mdi-delete"></i> Archive </a>


                </div>
            </div>
            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2> List Courses : </h2>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i> Title EN </th>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i>Title AR </th>
                                {{-- <th style="text-align: center"><i class="mdi mdi-format-title"></i>Price </th> --}}
                                <th style="text-align: center"><i class="far fa-question-circle"></i>Status</th>
                                <th style="text-align: center"><i class="mdi mdi-image"></i> Main Image </th>
                                <th style="text-align: center"><i class="mdi mdi-clock-outline mdi-spin"></i> Date/Time
                                </th>
                                <th style="text-align: center"><i class="mdi mdi-settings mdi-spin"></i> Control </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($cources->count() > 0)
                                @foreach ($cources as $index => $cource)
                                    <tr>
                                        <td style="text-align: center">
                                            {{ isset($cource->title_en) ? $cource->title_en : '-' }}
                                        </td>

                                        <td style="text-align: center">
                                            {{ isset($cource->title_ar) ? $cource->title_ar : '-' }}
                                        </td>

                                        {{-- <td style="text-align: center">
                                            {!! $cource->price > 0 ? $cource->price : "<span class='text-success'>Free</span>" !!}
                                        </td> --}}

                                        {{-- <td  style="text-align: center">{{ isset($cource->title_en) ? $cource->title_en : 'Undefined' }}</td> --}}
                                        <td style="text-align: center">
                                            @if ($cource->status == 1)
                                                <span class="text-danger">Stopped</span>
                                            @elseif ($cource->status == 2)
                                                <span class="text-success">Active</span>
                                            @else
                                                <span class="text-warning">Undefined</span>
                                            @endif
                                        </td>
                                        @if (isset($cource->main_image) && file_exists($cource->main_image))
                                            <td style="text-align: center"><img src="{{ asset($cource->main_image) }}"
                                                    width="70" height="70"
                                                    style="border-radius: 10px; border:solid 1px black;"></td>
                                        @else
                                            <td style="text-align: center"><img
                                                    src="{{ asset('images_default/default.jpg') }}" width="70"
                                                    height="70" style="border-radius: 10px; border:solid 1px black;">
                                            </td>
                                        @endif

                                        <td style="text-align: center">
                                            {{ isset($cource->course_date) ? date('Y-m-d', strtotime($cource->course_date)) : "<span style='color:red;'>Undefined</span>" }}
                                        </td>



                                        <td style="text-align: center">

                                            <a href="{{ route('super_admin.cources-show', $cource->id) }}"
                                                class="mb-1 btn btn-sm btn-primary"><i class="mdi mdi-eye"></i></a>

                                            <a href="{{ route('super_admin.cources-edit', $cource->id) }}"
                                                class="mb-1 btn btn-sm btn-success"><i
                                                    class="mdi mdi-playlist-edit"></i></a>


                                            <a href="{{ route('super_admin.tasks-index', encrypt($cource->id)) }}"
                                                class="mb-1 btn btn-sm btn-info" title="Show Sections">
                                                <i class="fa fa-question" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('super_admin.cources-softDelete', $cource->id) }}"
                                                class="mb-1 confirm btn btn-sm btn-danger"><i
                                                    class="mdi mdi-delete"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
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

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
                    <h1>@lang('front_end.News_Blogs_Archived')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> @lang('front_end.super_admin_dashboard')
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.news_blogs-index') }}">
                                    <i class="far fa-newspaper"></i></span> @lang('front_end.All_News_Blogs')
                                </a>
                            </li>

                            <li class="breadcrumb-item" aria-current="page" ><i class="mdi mdi-delete"></i>  @lang('front_end.All_News_Blogs_Archived')</li>
                        </ol>
                    </nav>
                </div>
            </div>
            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2> @lang('front_end.List_News_Blogs_Archived'): </h2>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i>@lang('front_end.Titl_English')</th>
                                <th style="text-align: center"><i class="mdi mdi-format-title"></i>@lang('front_end.title_rabic')</th>
                                <th style="text-align: center"><i class="far fa-question-circle"></i>@lang('front_end.status')</th>
                                <th style="text-align: center"><i class="mdi mdi-image"></i>@lang('front_end.Main_Image')</th>
                                <th  style="text-align: center"><i class="mdi mdi-clock-outline mdi-spin"></i>@lang('front_end.Date_Time')</th>
                                <th style="text-align: center"><i class="mdi mdi-settings mdi-spin"></i> @lang('front_end.Control')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($news_blogs->count() > 0)
                                @foreach ($news_blogs as $index => $news_blog)
                                    <tr>
                                        <td  style="text-align: center">{{ isset($news_blog->news_blog_title_ar) ? $news_blog->news_blog_title_ar : 'Undefined' }}</td>
                                        <td  style="text-align: center">{{ isset($news_blog->news_blog_title_en) ? $news_blog->news_blog_title_en : 'Undefined' }}</td>
                                        <td  style="text-align: center">{{ isset($news_blog->news_blog_status) ? $news_blog->news_blog_status : 'Undefined' }}</td>
                                        @if ($news_blog->news_blog_main_image && file_exists($news_blog->news_blog_main_image))
                                            <td  style="text-align: center"><img src="{{ asset($news_blog->news_blog_main_image) }}" width="70" height="70"
                                                    style="border-radius: 10px; border:solid 1px black;"></th>
                                            @else
                                            <td  style="text-align: center"><img src="{{ asset('images_default/default.jpg') }}" width="70" height="70"
                                                    style="border-radius: 10px; border:solid 1px black;"></th>
                                        @endif
                                        <td style="text-align: center">
                                            {{ isset($news_blog->created_at) ? $news_blog->created_at : "<span style='color:red;'>Undefined</span>" }}
                                        </td>
                                        <td  style="text-align: center">


                                                <a href="{{ route('super_admin.news_blogs-softDeleteRestore', $news_blog->id) }}" class="unarchive mb-1 btn btn-sm btn-success"><i
                                                    class="mdi mdi-redo-variant"></i></a>
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
                        "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
                        "order": [[ 4, "desc" ]]
                    });
                });

            </script>
            <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}">
            </script>
            <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}">
            </script>

        @endsection

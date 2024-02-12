@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@push('styles')
    <style>
        .c_lecture {
            transition: .5s !important;
        }

        .c_active_lecture {
            background: #67328f !important;
            color: #fff !important;
            border: 1px solid #67328f !important;
        }

        .c_active_lecture:hover {
            cursor: not-allowed !important;
        }

        .c_lecture:not(.c_active_lecture):hover {
            cursor: pointer !important;
            background: #67328f5d !important;
        }

        .c_section_thumbnail {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 20px;
            overflow: hidden;
        }

        .c_section_thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush
@section('content')
    <div id="alert_div">
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
    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="inner-top">

        <div class="c_title_top">
            <div class="container_1200">
                <div class="title_page">
                    <h1>صفحة الدورة</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>صفحة الدورة</a></p>
            </div>
        </div>

        <div class="c_mainContent">
            <div class="c_info">
                <div class="container_1200">
                    <h1>
                        {{ $course->title_ar }}
                    </h1>
                    <h5>
                        <span class="font-weight-bold">
                            المحاضر :
                        </span>
                        {{ $course->teacher_ar }}
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_courseDetails c_inner_body">
        <div class="c_mainContent">
            <livewire:courses.course-sections :id="$course->id" />
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the video element
            var video = document.getElementById('cSectionVideo');

            // Prevent context menu from appearing when right-clicking on the video
            video.addEventListener('contextmenu', function(event) {
                event.preventDefault();
            });
        });
    </script>
@endpush

@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
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
                    <h1>Edite News</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.cources-index') }}">
                                    <i class="far fa-newspaper"></i></span> List News
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"> Edite </li>
                        </ol>
                    </nav>
                </div>

                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2> Edite Course : </h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.cources-update', $course->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">

                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Title <strong
                                                            class="text-danger"> * @error('title_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_ar"
                                                            class="form-control @error('title_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title..." value="{!! $course->title_ar !!}">
                                                    </div>
                                                </div>




                                                {{-- Status --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"> Status
                                                        <strong class="text-danger"> * @error('status') - {{ $message }} @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="selectpicker" data-live-search="true" data-width="88%"
                                                            id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose...</option>
                                                            <option value="1" @if ($course->status == '1') selected @endif>Active</option>
                                                            <option value="2" @if ($course->status == '2') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" > Teacher Name :
                                                        <strong class="text-danger"> * @error('teacher_ar') - {{ $message }} @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text mdi mdi-account-check"></span>
                                                    </div>
                                                    <input type="text" id="teacher_ar" name="teacher_ar" class="form-control" value="{{ $course->teacher_ar }}">
                                                    </div>
                                                </div>



                                                {{-- Sections Count --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Sections Count <strong
                                                            class="text-danger">
                                                            * @error('section_count') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="number" min="1" step="1" name="section_count" class="form-control"
                                                            id="validationServer01" placeholder="section count" value="{{ $course->section_count }}">
                                                    </div>
                                                </div>

                                                {{-- Sections time --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Sections time <strong
                                                            class="text-danger">
                                                            * @error('section_time') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="number" min="0.01" step="0.01" name="section_time" class="form-control"
                                                            id="validationServer01" placeholder="section time" value="{{ $course->section_time }}">
                                                    </div>
                                                </div>
                                                {{-- Sections time --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Course Date <strong
                                                            class="text-danger">
                                                            * @error('course_date') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="date" name="course_date" class="form-control"
                                                            id="validationServer01" placeholder="course date" value="{{ $course->course_date }}">
                                                    </div>
                                                </div>


                                                {{-- Main Image --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Main Image <strong class="text-danger">
                                                            * @error('main_image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="main_image" class="form-control"
                                                            id="validationServer01" placeholder="main_image">
                                                    </div>
                                                    <div style="text-align: center">
                                                        @if ($course->main_image && file_exists($course->main_image))
                                                            <img src="{{ asset($course->main_image) }}" width="250"
                                                                height="250"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @else
                                                            <img src="{{ asset('images_default/default.jpg') }}"
                                                                width="250" height="250"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @endif
                                                    </div>
                                                </div>
                                                {{-- Main Video --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Main Video <strong class="text-danger">
                                                            * @error('main_video')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="main_video" class="form-control"
                                                            id="validationServer01" placeholder="main_video">
                                                    </div>
                                                    <div style="text-align: center">
                                                        @if ($course->main_video && file_exists($course->main_video))
                                                            <video width="250" height="250" controls>
                                                            <source src="{{ asset($course->main_video) }}" type="video/mp4">
                                                            <source src="{{ asset($course->main_video) }}" type="video/ogg">
                                                            Your browser does not support the video tag.
                                                          </video>
                                                        @else
                                                            <img src="{{ asset('images_default/default.jpg') }}"
                                                                width="100" height="100"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @endif
                                                    </div>
                                                </div>


                                                {{-- Title EN --}}
                                                <div class="col-md-12 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"> Description <strong
                                                            class="text-danger"> * @error('desc_ar') -
                                                                {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="desc_ar" class="form-control @error('desc_ar') is-invalid @enderror" rows="6"
                                                            id="validationServer01" placeholder="Titl_EN">
                                                            {!! $course->desc_ar !!}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <div class="input-group">
                                                        <button class="btn btn-primary" type="submit">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
        {{-- <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('desc_ar', {
                fullPage: true,
                allowedContent: true
            });
            CKEDITOR.replace('desc_en', {
                fullPage: true,
                allowedContent: true
            });
        </script> --}}
        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
@endsection

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



            <div class="breadcrumb-wrapper breadcrumb-contacts">
                {{-- ============================================== --}}
                {{-- ================== Header ==================== --}}
                {{-- ============================================== --}}
                <div>
                    <h1>Add New Course</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.cources-index') }}">
                                    <i class="far fa-newspaper"></i></span> All Courses
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"> Add Courses</li>
                        </ol>
                    </nav>
                </div>

                {{-- ============================================== --}}
                {{-- ==================== Body ==================== --}}
                {{-- ============================================== --}}
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2> Add New Courses :</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.cources-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                {{-- Title Ar --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Title AR <strong class="text-danger"> *
                                                            @error('title_ar')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_ar"
                                                            class="form-control @error('title_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title..."
                                                            value="{!! old('title_ar') !!}">
                                                    </div>
                                                </div>

                                                {{-- Title EN --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Title EN <strong class="text-danger"> *
                                                            <br>

                                                            @error('title_en')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title_en"
                                                            class="form-control @error('title_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title..."
                                                            value="{!! old('title_en') !!}">
                                                        <span class="text-xs text-danger">
                                                            (this name will shown on the student cv when the course is
                                                            completed)
                                                        </span>
                                                    </div>
                                                </div>


                                                {{-- Status --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"> Status
                                                        <strong class="text-danger"> * @error('status')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="selectpicker" data-live-search="true"
                                                            data-width="88%" id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose...</option>
                                                            <option value="2"
                                                                @if (old('status') == '2') selected @endif>Active
                                                            </option>
                                                            <option value="1"
                                                                @if (old('status') == '1') selected @endif>Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>



                                                {{-- @lang('front_end.News_News_Details_AR') --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"> Teacher Name :
                                                        <strong class="text-danger"> * @error('teacher_ar')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <input type="text" id="teacher_ar" name="teacher_ar"
                                                            class="form-control" value="{{ old('teacher_ar') }}">
                                                    </div>
                                                </div>

                                                {{-- Teacher Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Teacher Image <strong class="text-danger">
                                                            @error('teacher_image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="teacher_image" class="form-control"
                                                            id="validationServer01" placeholder="image"
                                                            value="{{ old('teacher_image') }}" accept="image/*">

                                                    </div>
                                                </div>


                                                {{-- Sections Count --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Sections Count <strong
                                                            class="text-danger">
                                                            * @error('section_count')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="number" min="1" step="1"
                                                            name="section_count" class="form-control"
                                                            id="validationServer01" placeholder="section count"
                                                            value="{{ old('section_count') }}">
                                                    </div>
                                                </div>

                                                {{-- Sections time --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Sections time In Minutes <strong
                                                            class="text-danger">
                                                            * @error('section_time')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="number" min="0.01" step="0.01"
                                                            name="section_time" class="form-control"
                                                            id="validationServer01" placeholder="section time"
                                                            value="{{ old('section_time') }}">
                                                    </div>
                                                </div>
                                                {{-- Sections time --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Course Date <strong class="text-danger">
                                                            * @error('course_date')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="date" name="course_date" class="form-control"
                                                            id="validationServer01" placeholder="course date"
                                                            value="{{ old('course_date') }}">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Course Image <strong
                                                            class="text-danger">
                                                            @error('main_image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="main_image" class="form-control"
                                                            id="validationServer01" placeholder="image" accept="image/*">
                                                    </div>
                                                </div>
                                                {{-- Main Video --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Main Video <strong class="text-danger">
                                                            @error('main_video')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="main_video" class="form-control"
                                                            id="validationServer01" placeholder="Video">
                                                    </div>
                                                </div>

                                                {{-- Price --}}
                                                {{-- <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"> Course Price :
                                                        <strong class="text-danger"> * @error('price')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="mb-0 input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <input type="number" step=".01" id="price"
                                                            name="price" class="form-control"
                                                            value="{{ old('price', 0) }}">

                                                    </div>
                                                    <span class="text-sm text-danger">
                                                        * If the course is free, keep the price 0
                                                    </span>
                                                </div> --}}

                                                {{-- Title EN --}}
                                                <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Description <strong class="text-danger">
                                                            * @error('desc_ar')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="desc_ar" class="form-control @error('desc_ar') is-invalid @enderror" rows="6"
                                                            id="section_text" placeholder="Titl_EN">
                                                            {!! old('desc_ar') !!}
                                                        </textarea>
                                                    </div>
                                                </div>


                                                <div class="mb-3 col-md-12">
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
    </div>


    <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('section_text', {
            fullPage: true,
            allowedContent: true
        });
    </script>
@endsection

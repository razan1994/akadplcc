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



            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Edite Course</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.cources-index') }}">
                                    <span class="far fa-newspaper"></span> All Courses
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
                                        <form action="{{ route('super_admin.cources-update', $course->id) }}" method="POST"
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
                                                            value="{!! old('title_ar', $course->title_ar) !!}">
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
                                                            value="{!! old('title_en', $course->title_en) !!}">
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
                                                                @if ($course->status == '2') selected @endif>Active
                                                            </option>
                                                            <option value="1"
                                                                @if ($course->status == '1') selected @endif>Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- Short Sescription --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">
                                                        Short Description
                                                        <strong class="text-danger">

                                                            @error('short_description')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                        <small class="text-danger">
                                                            this description will only shown on the news card
                                                        </small>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Short Description">{{ old('short_description', $course->short_description) }}</textarea>
                                                    </div>
                                                </div>



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
                                                            class="form-control" value="{{ $course->teacher_ar }}">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Teacher Image <strong class="text-danger">
                                                            * @error('teacher_image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="teacher_image" class="form-control"
                                                            id="validationServer01" placeholder="teacher_image">
                                                    </div>
                                                    <div style="text-align: center">
                                                        @if ($course->teacher_image && file_exists($course->teacher_image))
                                                            <img src="{{ asset($course->teacher_image) }}" width="150"
                                                                height="150"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @else
                                                            <img src="{{ asset('images_default/default.jpg') }}"
                                                                width="150" height="150"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @endif
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
                                                            value="{{ $course->section_count }}">
                                                    </div>
                                                </div>

                                                {{-- Sections time --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Sections time <strong
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
                                                            value="{{ $course->section_time }}">
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
                                                            id="validationServer01" placeholder="course date" readonly
                                                            value="{{ $course->course_date }}">
                                                    </div>
                                                </div>


                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Course Image <strong
                                                            class="text-danger">
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
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
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
                                                                <source src="{{ asset($course->main_video) }}"
                                                                    type="video/mp4">
                                                                <source src="{{ asset($course->main_video) }}"
                                                                    type="video/ogg">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @else
                                                            <img src="{{ asset('images_default/default.jpg') }}"
                                                                width="100" height="100"
                                                                style="border-radius: 10px; border:solid 1px black;">
                                                        @endif
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
                                                            value="{{ old('price', $course->price) }}">

                                                    </div>
                                                    <span class="text-sm text-danger">
                                                        * If the course is free, keep the price 0
                                                    </span>
                                                </div> --}}

                                                {{-- Payment Links --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium" for="course_payment_link">
                                                        Course Payment Link
                                                        @error('course_payment_link')
                                                            <strong class="text-danger">- {{ $message }}</strong>
                                                        @enderror
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-credit-card-outline"></span>
                                                        </div>
                                                        <input type="url" name="course_payment_link"
                                                            class="form-control @error('course_payment_link') is-invalid @enderror"
                                                            id="course_payment_link" placeholder="https://..."
                                                            value="{{ old('course_payment_link', $course->course_payment_link) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium" for="certificate_payment_link">
                                                        Certificate Payment Link
                                                        @error('certificate_payment_link')
                                                            <strong class="text-danger">- {{ $message }}</strong>
                                                        @enderror
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-certificate-outline"></span>
                                                        </div>
                                                        <input type="url" name="certificate_payment_link"
                                                            class="form-control @error('certificate_payment_link') is-invalid @enderror"
                                                            id="certificate_payment_link" placeholder="https://..."
                                                            value="{{ old('certificate_payment_link', $course->certificate_payment_link) }}">
                                                    </div>
                                                </div>

                                                {{-- Prices --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium" for="price_before_discount">
                                                        Price Before Discount
                                                        @error('price_before_discount')
                                                            <strong class="text-danger">- {{ $message }}</strong>
                                                        @enderror
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cash"></span>
                                                        </div>
                                                        <input type="number" step="0.01" min="0" name="price_before_discount"
                                                            class="form-control @error('price_before_discount') is-invalid @enderror"
                                                            id="price_before_discount" placeholder="0.00"
                                                            value="{{ old('price_before_discount', $course->price_before_discount) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium" for="price_after_discount">
                                                        Price After Discount
                                                        @error('price_after_discount')
                                                            <strong class="text-danger">- {{ $message }}</strong>
                                                        @enderror
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cash-check"></span>
                                                        </div>
                                                        <input type="number" step="0.01" min="0" name="price_after_discount"
                                                            class="form-control @error('price_after_discount') is-invalid @enderror"
                                                            id="price_after_discount" placeholder="0.00"
                                                            value="{{ old('price_after_discount', $course->price_after_discount) }}">
                                                    </div>
                                                </div>


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
                                                            {!! $course->desc_ar !!}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-md-12">
                                                    <div class="input-group">
                                                        <button class="btn btn-primary" type="submit">Edit</button>
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
        <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('section_text', {
                fullPage: true,
                allowedContent: true
            });
        </script>
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

@extends('admin.layouts.app')

@push('styles')
    <style>
        a.section-card-item {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            box-shadow: 0 0 10px #dadada;
        }

        a.section-card-item:hover {
            box-shadow: 0 0 10px #a1a1a1;
            transform: translateY(-5px);
        }
    </style>
@endpush

@section('content')
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
        <div>
            <h1> Show Course </h1>
            <nav aria-label="breadcrumb">
                <ol class="p-0 breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.dashboard') }}">
                            <span class="mdi mdi-home"></span> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.cources-index') }}">
                            <i class="far fa-newspaper"></i></span> List Course
                        </a>
                    </li>
                    <li class="breadcrumb-item">

                        <i class="mdi mdi-eye"></i> Show
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('super_admin.cources-edit', $course->id) }}" class="mb-1 btn btn-primary"><i
                    class="mdi mdi-playlist-edit"></i> Edit </a>
        </div>

    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#sections" role="tab" aria-controls="home"
                aria-selected="true"> Sections </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#details" role="tab" aria-controls="profile"
                aria-selected="false"> Details </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="sections" role="tabpanel" aria-labelledby="profile-tab">
            <div class="bg-white border rounded">
                <div class="no-gutters">
                    <div class="card-header card-header-border-bottom">
                        <h2> Add Course Section :</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('super_admin.add-course-section', $course->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" id="file_save" name="video"> --}}
                            <div class="form-row">
                                <div class="mb-3 col-md-6">
                                    <label class="mb-3 text-dark font-weight-medium" for="validationServer01">
                                        Title
                                        <strong class="text-danger"> *
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
                                            id="validationServer01" placeholder="Title..." value="{!! old('title_ar') !!}">
                                    </div>
                                </div>

                                {{-- Main Video --}}
                                <div class="mb-3 col-md-6">
                                    <label class="mb-3 text-dark font-weight-medium" for="validationServer01">
                                        Video URL
                                        <strong class="text-danger"> *
                                            @error('video')
                                                -
                                                {{ $message }}
                                            @enderror
                                        </strong>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="video"
                                            class="form-control @error('video') is-invalid @enderror"
                                            id="validationServer01" placeholder="Video URL ...."
                                            value="{!! old('video') !!}">
                                    </div>
                                </div>

                                {{-- Section Image --}}
                                <div class="mb-3 col-md-6">
                                    <label class="mb-3 text-dark font-weight-medium" for="validationServer01"> Image
                                        <strong class="text-danger">
                                            * @error('section_image')
                                                - {{ $message }}
                                            @enderror
                                        </strong>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                        </div>
                                        <input type="file" name="section_image" class="form-control"
                                            id="validationServer01" placeholder="section_image" accept="image/*">
                                    </div>
                                </div>
                                {{-- Main text --}}
                                <div class="mb-3 col-md-12">
                                    <label class="mb-3 text-dark font-weight-medium" for="validationServer01"> Description
                                        <strong class="text-danger">
                                            @error('text_ar')
                                                - {{ $message }}
                                            @enderror
                                        </strong></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                        </div>
                                        <textarea name="text_ar" class="form-control" id="section_text">{!! old('text_ar') !!}</textarea>
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

                    <div class="card-body">
                        <div class="row">
                            @if (isset($sections) && $sections->count() > 0)
                                @foreach ($sections as $section)
                                    <div class="col-md-4">
                                        <div class="pb-4 text-center">
                                            <h4 class="text-dark"> Title :
                                                {{ isset($section->title_ar) ? $section->title_ar : '<span class="text-danger"> Undefined </span>' }}
                                            </h4>
                                        </div>
                                        <a href="{{ route('super_admin.showSection', $section->id) }}"
                                            style="max-height: 250px; overflow: hidden; display: block;"
                                            class="card section-card-item">
                                            @if (isset($section->section_image) && file_exists($section->section_image))
                                                <img src="{{ asset($section->section_image) }}" alt=""
                                                    style="object-fit: contain !important; height: 250px; width: 100%;">
                                            @else
                                                @if (isset($section->text))
                                                    <img style="width: 100%;"
                                                        src="{{ asset('images_default/text_image.webp') }}"
                                                        class="img-thumbnail image-preview" alt="">
                                                @else
                                                    <img style="width: 100%;"
                                                        src="{{ asset('images_default/user.jpg') }}"
                                                        class="img-thumbnail image-preview" alt="">
                                                @endif
                                            @endif
                                        </a>
                                        <div class="gap-5 d-flex align-items-center justify-content-around">
                                            <a href="{{ route('super_admin.delete-course-section', $section->id) }}"
                                                class="btn btn-danger">Delete</a>
                                            <a href="{{ route('super_admin.section.edit', $section->id) }}"
                                                class="btn btn-info ">Edit</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-danger">No Sections Added ...</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="home-tab">
            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Title :</h4>
                                <p style="color: blue">
                                    {{ isset($course->title_ar) ? $course->title_ar : 'Undefined' }}</p>
                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Status :</h4>
                                <p style="color: blue">
                                    {{ isset($course->status) ? ($course->status == 1 ? 'Active' : 'Inactive') : 'Undefined' }}
                                </p>
                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Teacher Name :</h4>

                                <p style="color: blue">
                                    {!! isset($course->teacher_ar) ? $course->teacher_ar : 'Undefined' !!}</p>
                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Section Count :</h4>
                                <p style="color: blue">
                                    {!! isset($course->section_count) ? $course->section_count : 'Undefined' !!}</p>
                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Section Time :</h4>

                                <p style="color: blue">
                                    {!! isset($course->section_time) ? $course->section_time : 'Undefined' !!}</p>

                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Course Date :</h4>

                                <p style="color: blue">
                                    {!! isset($course->course_date) ? $course->course_date : 'Undefined' !!}</p>

                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                            <div class="pb-4 text-center">
                                <h4 class="mb-3 text-dark"> Course Description :</h4>

                                <p style="color: blue">
                                    {!! isset($course->desc_ar) ? $course->desc_ar : 'Undefined' !!}</p>

                            </div>
                            <hr class="w-100">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center col-md-12 profile-content-left" style="margin: auto;">
                            <h3 class="mb-3 text-dark"> Teacher Image </h3>
                            @if ($course->teacher_image && file_exists($course->teacher_image))
                                <img style="width:100%;" src="{{ asset($course->teacher_image) }}"
                                    class="img-thumbnail image-preview" alt="">
                            @else
                                <img style="width: 75%;" src=" {{ asset('images_default/user.jpg') }}"
                                    class="img-thumbnail image-preview" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center col-md-12 profile-content-left" style="margin: auto;">
                            <h3 class="mb-3 text-dark"> Main Image </h3>
                            @if ($course->main_image && file_exists($course->main_image))
                                <img style="width:100%;" src="{{ asset($course->main_image) }}"
                                    class="img-thumbnail image-preview" alt="">
                            @else
                                <img style="width: 75%; src=" {{ asset('images_default/user.jpg') }}"
                                    class="img-thumbnail image-preview" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center col-md-12 profile-content-left" style="margin: auto;">
                            <h3 class="mb-3 text-dark"> Main Video </h3>
                            @if (isset($course->main_video) && file_exists($course->main_video))
                                <video controls style="width:100%;">
                                    <source src="{{ asset($course->main_video) }}" type="video/mp4">
                                    <source src="{{ asset($course->main_video) }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <img style="width: 75%;" src="{{ asset('images_default/user.jpg') }}"
                                    class="img-thumbnail image-preview" alt="">
                            @endif
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

    <script type="text/javascript">
        let browseFile = $('#browseFile');
        let resumable = new Resumable({
            target: '{{ route('super_admin.add-course-section-video') }}',
            query: {
                _token: '{{ csrf_token() }}'
            }, // CSRF token
            maxFilesize: 10 * 1024 * 1024 * 1024,
            chunkSize: 1 * 1024 *
                1024, // default is 1*1024*1024, this should be less than your maximum limit in php.ini
            simultaneousUploads: 1,
            fileType: ['mp4'],
            headers: {
                'Accept': 'application/json'
            },
            testChunks: false,
            throttleProgressCallbacks: 1

        });

        resumable.assignBrowse(browseFile[0]);

        resumable.on('fileAdded', function(file) { // trigger when file picked
            showProgress();
            resumable.upload() // to actually start uploading.
        });

        resumable.on('fileProgress', function(file) { // trigger when file progress update
            updateProgress(Math.floor(file.progress() * 100));
        });

        resumable.on('fileSuccess', function(file, response) { // trigger when file upload complete
            response = JSON.parse(response)
            $('#videoPreview').attr('src', response.path);
            $('#file_save').attr('value', response.filesave);
            $('.card-footer').show();
        });

        resumable.on('fileError', function(file, response) { // trigger when there is any error
            alert('file uploading error.')
        });


        let progress = $('.progress');

        function showProgress() {
            progress.find('.progress-bar').css('width', '0%');
            progress.find('.progress-bar').html('0%');
            progress.find('.progress-bar').removeClass('bg-success');
            progress.show();
        }

        function updateProgress(value) {
            progress.find('.progress-bar').css('width', `${value}%`)
            progress.find('.progress-bar').html(`${value}%`)
        }

        function hideProgress() {
            progress.hide();
        }
    </script>

@endsection

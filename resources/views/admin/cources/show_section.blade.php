@extends('admin.layouts.app')


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
                        <a href="{{ route('super_admin.cources-show', $section->course_id) }}">
                            <span class="far fa-newspaper"></span> Course
                        </a>
                    </li>
                    <li class="breadcrumb-item">

                        <i class="mdi mdi-eye"></i> Show Section
                    </li>
                </ol>
            </nav>
        </div>
    </div>



    <div class="bg-white border rounded">

        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> title :</h4>
                        <p style="color: blue">
                            {{ isset($section->title_ar) ? $section->title_ar : 'Undefined' }}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-6">
                <div class="text-center col-md-12 profile-content-left" style="margin: auto;">
                    <h3 class="mb-3 text-dark"> Section Image </h3>
                    @if ($section->section_image && file_exists($section->section_image))
                        <img style="width:100%;" src="{{ asset($section->section_image) }}"
                            class="img-thumbnail image-preview" alt="">
                    @else
                        <img style="width: 75%; src=" {{ asset('images_default/user.jpg') }}"
                            class="img-thumbnail image-preview" alt="">
                    @endif
                </div>
            </div>
            {{-- <h4>{{ asset($section->video) }}</h4> --}}
            <div class="col-md-6">
                <div class="text-center col-md-12 profile-content-left" style="margin: auto;">
                    <h3 class="mb-3 text-dark"> Section Video </h3>
                    @if ($section->video)
                        <video width="100%" height="240" controls>
                            <source src="{{ $section->video }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        <img style="width: 75%;" src="{{ asset('images_default/user.jpg') }}"
                            class="img-thumbnail image-preview" alt="">
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Section Text :</h4>

                        <p style="color: blue">
                            {!! isset($section->text_ar) ? $section->text_ar : 'Undefined' !!}</p>

                    </div>
                    <hr class="w-100">
                </div>
            </div>


        </div>
    </div>
@endsection

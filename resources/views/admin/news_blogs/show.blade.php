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
            <h1> Show Blog </h1>
            <nav aria-label="breadcrumb">
                <ol class="p-0 breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.dashboard') }}">
                            <span class="mdi mdi-home"></span> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.news_blogs-index') }}">
                            <i class="far fa-newspaper"></i></span> List Blogs
                        </a>
                    </li>
                    <li class="breadcrumb-item">

                        <i class="mdi mdi-eye"></i> Show
                    </li>



                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('super_admin.news_blogs-edit', $news_blog->id) }}" class="mb-1 btn btn-primary"><i
                    class="mdi mdi-playlist-edit"></i> Edit </a>

        </div>

    </div>







    <div class="bg-white border rounded">


        <div class="row no-gutters">

            <div class="col-md-4">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> title :</h4>
                        <p style="color: blue">
                            {{ isset($news_blog->title_ar) ? $news_blog->title_ar : 'Undefined' }}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Titl EN :</h4>
                        <p style="color: blue">
                            {{ isset($news_blog->title_en) ? $news_blog->title_en : 'Undefined' }}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div> --}}
            <div class="col-md-4">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Status :</h4>

                        <p style="color: blue">
                            {!! isset($news_blog->status) ? $news_blog->status : 'Undefined' !!}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-4">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Short Description :</h4>

                        @if ($news_blog->short_description)
                            <p>
                                {!! $news_blog->short_description !!}
                            </p>
                        @else
                            <p style="color: red">
                                Undefined
                            </p>
                        @endif

                    </div>
                    <hr class="w-100">
                </div>
            </div>

            {{-- <div class="col-md-6">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Blog Details EN :</h4>
                        <p style="color: blue">
                            {!! isset($news_blog->desc_en) ? $news_blog->desc_en : 'Undefined' !!}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div> --}}

            <div class="col-12">
                <div class="px-3 pt-5 pb-3 profile-content-left px-xl-5">
                    <div class="pb-4 text-center">
                        <h4 class="mb-3 text-dark"> Blog Details :</h4>

                        <p style="color: blue">
                            {!! isset($news_blog->desc_ar) ? $news_blog->desc_ar : 'Undefined' !!}</p>

                    </div>
                    <hr class="w-100">
                </div>
            </div>


            <div class="col-md-12">
                <div class="px-3 pt-5 pb-3 text-center col-md-6 profile-content-left px-xl-5" style="margin: auto;">
                    <h3 class="mb-3 text-dark"> Image </h3>
                    @if ($news_blog->image && file_exists($news_blog->image))
                        <img style="width:100%; margin-top: 8px;height: 300px;" src="{{ asset($news_blog->image) }}"
                            class="img-thumbnail image-preview" alt="">
                    @else
                        <img style="width: 75%; margin-top: 8px" src="{{ asset('images_default/user.jpg') }}"
                            class="img-thumbnail image-preview" alt="">
                    @endif


                </div>
                <hr class="w-100">
            </div>


        </div>
    </div>
@endsection

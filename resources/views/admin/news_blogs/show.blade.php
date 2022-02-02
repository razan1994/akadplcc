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
            <h1>@lang('front_end.Show_News_Blogs')</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.dashboard') }}">
                            <span class="mdi mdi-home"></span> @lang('front_end.super_admin_dashboard')
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('super_admin.news_blogs-index') }}">
                            <i class="far fa-newspaper"></i></span> @lang('front_end.List_News_Blogs')
                        </a>
                    </li>
                    <li class="breadcrumb-item">

                        <i class="mdi mdi-eye"></i>@lang('front_end.Show')                                     
                        </li>



                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route('super_admin.news_blogs-edit', $news_blog->id) }}" class="mb-1 btn btn-primary"><i
                    class="mdi mdi-playlist-edit"></i>@lang('front_end.Edit ')  </a>

        </div>

    </div>







    <div class="bg-white border rounded">


        <div class="row no-gutters">

            <div class="col-md-4">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="text-center pb-4">
                        <h4 class="text-dark mb-3">@lang('front_end.title_rabic') :</h4>
                        <p style="color: blue">
                            {{ isset($news_blog->news_blog_title_ar) ? $news_blog->news_blog_title_ar : 'Undefined' }}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-4">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="text-center pb-4">
                        <h4 class="text-dark mb-3">@lang('front_end.Titl_English') :</h4>
                        <p style="color: blue">
                            {{ isset($news_blog->news_blog_title_en) ? $news_blog->news_blog_title_en : 'Undefined' }}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="text-center pb-4">
                        <h4 class="text-dark mb-3">@lang('front_end.status') :</h4>

                        <p style="color: blue">
                            {!! isset($news_blog->news_blog_status) ? $news_blog->news_blog_status : 'Undefined' !!}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="text-center pb-4">
                        <h4 class="text-dark mb-3"> @lang('front_end.News_Blog_Details_EN'):</h4>
                        <p style="color: blue">
                            {!! isset($news_blog->news_blog_des_en) ? $news_blog->news_blog_des_en : 'Undefined' !!}</p>
                    </div>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="text-center pb-4">
                        <h4 class="text-dark mb-3"> @lang('front_end.News_Blog_Details_AR') :</h4>

                        <p style="color: blue">
                            {!! isset($news_blog->news_blog_des_ar) ? $news_blog->news_blog_des_ar : 'Undefined' !!}</p>

                    </div>
                    <hr class="w-100">
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-6 profile-content-left text-center  pt-5 pb-3 px-3 px-xl-5" style="margin: auto;">
                    <h3 class="text-dark mb-3">@lang('front_end.Main_Image') </h3>
                    @if ($news_blog->news_blog_main_image && file_exists($news_blog->news_blog_main_image))
                        <img style="width:100%; margin-top: 8px;height: 300px;"
                            src="{{ asset($news_blog->news_blog_main_image) }}" class="img-thumbnail image-preview"
                            alt="">
                    @else
                        <img style="width: 75%; margin-top: 8px" src="{{ asset('images_default/user.jpg') }}"
                            class="img-thumbnail image-preview" alt="">
                    @endif


                </div>
                <hr class="w-100">
            </div>


            <div class="col-md-12">
                <div class="col-md-6 profile-content-left text-center  pt-5 pb-3 px-3 px-xl-5" style="margin: auto;">
                    <h3 class="text-dark mb-3">@lang('front_end.News_Blogs_File') </h3>
                    @if ($news_blog->news_blog_file && file_exists($news_blog->news_blog_file))
                        @lang('front_end.Service_File') : <span style="color:blue;">
                            <a href="{{ asset($news_blog->news_blog_file) }}" target="_blank"><i class="fa fa-file"
                                    style="font-size: 15pt"></i></a>

                        </span>

                    @else
                        <span style="color:red;">Undefined</span>
                    @endif

                </div>
                <hr class="w-100">
            </div>




            <div class="col-md-12">
                <div class="profile-content-left text-center  pt-5 pb-3 px-3 px-xl-5">
                    <h3 class="text-dark mb-3">@lang('front_end.News_Blogs_images') </h3>
                    @if (isset($news_blog_images))
                        <div class="row" style="margin-bottom: 25px">
                            @foreach ($news_blog_images as $image)
                                <div class="col-md-4">
                                    <img src="{{ asset($image->image) }}"
                                        style=" height:200px; width: 100%;border:double 3px black; margin-bottom:5px;  margin-top:5px;"
                                        class="img-thumbnail image-preview" alt="">
                                    <a href="{{ route('super_admin.news_blogs-deleteimages', $image->id) }}"
                                        class="confirm btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        @lang('front_end.Delete_image')</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('super_admin.news_blogs-addimages', $news_blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="news_blog_id" value="{{ $news_blog->id }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3 class="text-dark mb-3"> @lang('front_end.Add_Images') </h3> 
                                <input type="file" name="image[]" class="form-control" multiple>
                                @error('image')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i>
                                    Upload photo </button>
                            </div>
                        </div>
                    </form>
                    <hr class="w-100">
                </div>
            </div>

            <div class="col-md-12 " style="text-align: center">
                <h3 class="text-dark mb-3"> @lang('front_end.News_Blogs_Video') </h3> 
                @if (isset($news_blog->newsBlogVideos) && $news_blog->newsBlogVideos->count() > 0)
                    <div class="row">
                        @foreach ($news_blog->newsBlogVideos as $video)
                            <div class="col-md-3" style="margin-bottom: 25px">
                                <video style="width: 100%; margin-top: 8px;height: 300px;" controls>
                                    <source src="{{ asset($video->video) }}">
                                </video>

                                <a href="{{ route('super_admin.news_blogs-deletevideos', $video->id) }}"
                                    class="confirm btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                    @lang('front_end.Delete_Video') </a>
                            </div>
                        @endforeach
                    </div>
                @else

                    <h5 class="text-dark mb-3"> @lang('front_end.No_News_Blogs_Video') </h5>
                @endif
                <form action="{{ route('super_admin.news_blogs-addvideos', $news_blog->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="news_blog_id" value="{{ $news_blog->id }}">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h3 class="text-dark mb-3">@lang('front_end.Add_Video') </h3>
                            <input type="file" name="video" class="form-control">
                            @error('video')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i>
                                @lang('front_end.Upload_Video') </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection

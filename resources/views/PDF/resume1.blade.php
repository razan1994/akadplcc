<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">
    <link href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- <link rel="shortcut icon" href="{{ asset('front_end_style/images/faviconlogo.png') }}" type="image/png"> --}}


    <link rel="stylesheet" href="{{ asset('front_end_style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('front_end_style/css/main.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('front_end_style/css/more.css') }}">
    <meta name="google-site-verification" content="zBHgCOISHWrCD81xSxrV_A7gKj92xic531u1oe1hRLI" />


    <!-- Link paginate CSS -->
    <link rel="stylesheet" rel="preload" href="{{ asset('front_end_style/css/jquery.paginate.css') }}">
    {{-- <script src="{{ asset('front_end_style/js/jquery.colorbox-min.js') }}"></script> --}}

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('front_end_style/css/swiper-bundle.min.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('front_end_style/css/style.css') }}">

    <style>

        body {
            direction: ltr;
            text-align: left;
        }
        .c_page_resume .c_topCv .c_blockss {
            direction: ltr;
            background: red;
            height: 400px;
            overflow: hidden;
        }
        .c_page_resume .c_topCv .c_blockss .c_infoss{
            align-items: center;
            float: left;
            width: 55%;
            padding: 0 30px;
        }

        .c_page_resume .c_topC
        v .c_blockss .c_image{
            padding-top: 60px;
            width: 45%;
            float: right;
            backgroun
        }
        .c_page_resume .c_topCv .c_blockss .c_image img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: contain;
            object-position: center;
            border: 5px solid white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="body_inner">
        <div class="c_page_resume">
            <div class="c_topCv" style="width: 100% !importnat">
                <div class="c_blockss">
                    <div class="c_infoss">
                        <div class="c_name">
                            @php
                                $auth = Auth::user();
                                $fullName = $auth->name;
                                $name = explode(' ', $fullName);
                                $first_name = $name[0];
                                $last_name = $name[-1] ?? '';
                            @endphp
                            <h2>{{ isset($first_name) ? $first_name : '<span class="text-danger">Undefined</span>' }}
                            </h2>
                            <p>{{ isset($last_name) ? $last_name : '<span class="text-danger">Undefined</span>' }}</p>
                        </div>
                        <div class="c_postionss">
                            <h4 id="job_title_txt">
                                {{ isset($auth->info->job_title) ? $auth->info->job_title : 'Undefined' }}
                            </h4>
                            <p id="over_view_txt">
                                {!! isset($auth->info->over_view) ? $auth->info->over_view : 'Undefined' !!}
                            </p>
                        </div>

                    </div>
                    <div class="c_image">
                        <form id="image_form" enctype="multipart/form-data">
                            @csrf
                            <input type="file" id="browse" name="image" style="display:none;"
                                onchange="Handlechange();" />
                        </form>
                        @if (isset($auth->profile_photo_path) && file_exists($auth->profile_photo_path))
                            <img id="review-thumbnail-submit" src="{{ asset($auth->profile_photo_path) }}"
                                onclick="HandleBrowseClick();">
                        @else
                            <img id="review-thumbnail-submit" src="{{ asset('/front_end_style/images/omgs.png') }}"
                                onclick="HandleBrowseClick();">
                        @endif
                    </div>
                </div>
            </div>
            <div class="c_createCV">
                <div class="c_body_cv">
                    <div class="c_padding_re">
                        <div class="c_item c_exper">
                            <div class="c_titles">
                                <h3>experience</h3>
                            </div>
                            <div class="c_bdou" id="experiences_div">
                                @if (isset($auth->experiences) && $auth->experiences->count() > 0)
                                    @foreach ($auth->experiences as $experience)
                                        <div class="c_itme_ex">
                                            <div class="c_date">
                                                <p>{{ isset($experience->from_date) ? date('F Y', strtotime($experience->from_date)) : '<span class="text-danger"></span>' }}
                                                    -
                                                    @if ($experience->untill_now == 1)
                                                        Till Now
                                                    @else
                                                        {{ isset($experience->to_date) ? date('F Y', strtotime($experience->to_date)) : '<span class="text-danger"></span>' }}
                                                    @endif
                                                </p>
                                                <a class="float-right text-danger delete_ex" style="cursor: pointer;"
                                                    data-id="{{ $experience->id }}"><i class="fa fa-trash"></i></a>
                                            </div>
                                            <div class="c_company">
                                                <p>
                                                    {{ isset($experience->from_date) ? $experience->company_name : '<span class="text-danger"></span>' }}
                                                </p>
                                            </div>
                                            <div class="c_postionss">
                                                <span>
                                                    {{ isset($experience->job_title) ? $experience->job_title : '<span class="text-danger"></span>' }}
                                                </span>
                                            </div>
                                            <ul>
                                                <li class="font-weight-normal">{!! isset($experience->experience) ? $experience->experience : '<span class="text-danger"></span>' !!}</li>
                                            </ul>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="c_item c_contact">
                            <div class="c_titles">
                                <h3>CONTACT</h3>
                            </div>
                            <ul id="contact_info_ul">
                                <li><i
                                        class="fas fa-phone-alt"></i><span>{{ isset($auth->info->phone) ? $auth->info->phone : '+96278xxxxxxx' }}</span>
                                </li>
                                <li><i
                                        class="fas fa-envelope"></i><span>{{ isset($auth->info->email) ? $auth->info->email : 'example@example.com' }}</span>
                                </li>
                                @if (isset($auth->info->link))
                                    <li><i
                                            class="fas fa-globe"></i><span>{{ isset($auth->info->link) ? $auth->info->link : 'https://exapmle.com' }}</span>
                                    </li>
                                @endif
                                <li><i
                                        class="fas fa-home"></i><span>{{ isset($auth->info->address) ? $auth->info->address : 'country - region' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="c_head_cv">
                    <div class="c_block_fle">
                        <div class="c_item c_exper c_eduction">
                            <div class="c_titles">
                                <h3>eduction</h3>
                            </div>
                            <div class="c_bdou" id="education_div">
                                @if (isset($auth->educations) && $auth->educations->count() > 0)
                                    @foreach ($auth->educations as $education)
                                        <div class="c_itme_ex">
                                            <div class="c_date">
                                                <a class="float-right text-danger delete_education"
                                                    style="cursor: pointer;" data-id="{{ $education->id }}"><i
                                                        class="fa fa-trash"></i></a>
                                                <p>{{ isset($education->from_date) ? date('Y', strtotime($education->from_date)) : '<span class="text-danger"></span>' }}
                                                    -
                                                    {{ isset($education->to_date) ? date('Y', strtotime($education->to_date)) : '<span class="text-danger"></span>' }}
                                                </p>
                                            </div>
                                            <div class="c_company">
                                                <p>
                                                    {{ isset($education->institution_name) ? $education->institution_name : '<span class="text-danger"></span>' }}
                                                </p>
                                            </div>
                                            <div class="c_postionss">
                                                <span>{{ isset($education->section) ? $education->section : '<span class="text-danger"></span>' }}
                                                    -
                                                    {{ isset($education->degree) ? $education->degree : '<span class="text-danger"></span>' }}
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="c_item c_skills">
                            <div class="c_titles">
                                <h3>skills</h3>
                            </div>
                            <div id="skills_div">
                                @if (isset($auth->skills) && $auth->skills->count() > 0)
                                    @foreach ($auth->skills as $skill)
                                        <div class="c_temem">
                                            <a class="float-right text-danger delete_skill" style="cursor: pointer;"
                                                data-id="{{ $skill->id }}"><i class="fa fa-trash"></i></a>
                                            <h5>{{ isset($skill->skill_name) ? $skill->skill_name : '<span class="text-danger"></span>' }}
                                            </h5>
                                            <div class="c_progress" style="margin-top:10px;">
                                                <div class="c_bar"
                                                    style="width:{{ isset($skill->range) ? $skill->range : '0' }}%">
                                                    <p class="c_percent">
                                                        {{ isset($skill->range) ? $skill->range : '<span class="text-danger"></span>' }}%
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


{{-- @endsection --}}

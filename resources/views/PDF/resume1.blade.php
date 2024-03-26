@extends('front_end_layout.pdf_layout', ['title' => 'الصفحة الرئيسية'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('front_end_style/css/all.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            -webkit-transition: none !important;
            transition: none !important;
        }

        @media print only {
            body *:not(.body_inner) {
                display: none !important;
            }

            .hidePrint {
                display: none !important;
            }

            .body_inner {
                font-family: Arial, sans-serif;
                background: red;
                padding: 20px;
            }

            .c_page_resume {
                margin-bottom: 20px;
            }

            .container_900 {
                max-width: 900px;
                margin: 0 auto;
            }

            .c_topCv {
                margin-bottom: 20px;
            }

            .c_name h2 {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .c_name p {
                font-size: 16px;
                margin-bottom: 0;
            }

            .c_postionss h4 {
                font-size: 18px;
                font-style: italic;
                margin-bottom: 5px;
            }

            .c_postionss p {
                font-size: 16px;
                margin-bottom: 0;
            }

            .c_image {
                margin-top: 20px;
            }

            .c_item {
                margin-bottom: 20px;
            }

            .c_titles h3 {
                font-size: 20px;
                margin-bottom: 10px;
            }

            .c_bdou p {
                font-size: 16px;
                margin-bottom: 5px;
            }

            .c_company p,
            .c_postionss span {
                font-size: 16px;
            }

            .c_item ul {
                list-style-type: none;
                padding-left: 0;
            }

            .c_item ul li {
                margin-bottom: 10px;
            }

            .c_item ul li.font-weight-normal {
                font-weight: normal;
            }

            .c_edotadd ol {
                padding-left: 0;
            }

            .c_edotadd ol li {
                display: inline-block;
                margin-right: 10px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="body_inner">
        <div class="c_page_resume">
            <a href="{{ route('student.download-cv') }}" class="btn btn-primary btn-md hidePrint">
                Download cv
            </a>
            <div class="container_900">
                <div class="c_topCv">
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
    </div>
@endsection

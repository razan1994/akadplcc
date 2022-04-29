@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')
    <div class="body_inner">
        <div class="c_page_resume">
            <div class="container_900">
                <div class="c_topCv">
                    <div class="c_blockss">
                        <div class="c_infoss">
                            <div class="c_name">
                                <h2>{{ isset($auth->first_name) ? $auth->first_name : '<span class="text-danger">Undefined</span>' }}</h2>
                                <p>{{ isset($auth->last_name) ? $auth->last_name : '<span class="text-danger">Undefined</span>' }}</p>
                            </div>
                            <div class="c_postionss">
                                <h4 id="job_title_txt">{{ isset($auth->info->job_title) ? $auth->info->job_title : 'Undefined' }} <a data-toggle="modal" data-target="#job_title_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a></h4>
                                <p id="over_view_txt">
                                    {!! isset($auth->info->over_view) ? $auth->info->over_view : 'Undefined' !!}
                                    <a data-toggle="modal" data-target="#over_view_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a>
                                </p>
                            </div>

                        </div>
                        <div class="c_image">
                            <form id="image_form" enctype="multipart/form-data">
                                @csrf
                                <input type="file" id="browse" name="image" style="display:none;" onchange="Handlechange();" />
                            </form>
                            @if(isset($auth->profile_photo_path) && file_exists($auth->profile_photo_path))
                                <img id="review-thumbnail-submit" src="{{ asset($auth->profile_photo_path) }}" onclick="HandleBrowseClick();">
                            @else
                                <img id="review-thumbnail-submit" src="{{ asset('/front_end_style/images/omgs.png') }}" onclick="HandleBrowseClick();">
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
                                    @if(isset($auth->experiences) && $auth->experiences->count() > 0)
                                        @foreach($auth->experiences as $experience)
                                        <div class="c_itme_ex">
                                            <div class="c_date">
                                                <p>{{ isset($experience->from_date) ? date("F Y", strtotime($experience->from_date)) : '<span class="text-danger"></span>' }} -
                                                    @if($experience->untill_now == 1)
                                                        Till Now
                                                    @else
                                                        {{ isset($experience->to_date) ? date("F Y", strtotime($experience->to_date)) : '<span class="text-danger"></span>' }}
                                                    @endif
                                                </p>
                                                <a class="float-right text-danger delete_ex" style="cursor: pointer;" data-id="{{ $experience->id }}"><i class="fa fa-trash"></i></a>
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

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a data-toggle="modal" data-target="#experience_modal" style="cursor: pointer;"><i class="fas fa-plus"></i></a></li>
                                    </ol>
                                </div>
                            </div>

                            <div class="c_item c_contact">
                                <div class="c_titles">
                                    <h3>CONTACT</h3>
                                </div>
                                <ul id="contact_info_ul">
                                    <li><i class="fas fa-phone-alt"></i><span>{{ isset($auth->info->phone) ? $auth->info->phone : '+96278xxxxxxx' }}</span></li>
                                    <li><i class="fas fa-envelope"></i><span>{{ isset($auth->info->email) ? $auth->info->email : 'example@example.com' }}</span></li>
                                    @if(isset($auth->info->link))
                                        <li><i class="fas fa-globe"></i><span>{{ isset($auth->info->link) ? $auth->info->link : 'https://exapmle.com' }}</span></li>
                                    @endif
                                    <li><i class="fas fa-home"></i><span>{{ isset($auth->info->address) ? $auth->info->address : 'country - region' }}</span></li>
                                </ul>

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a data-toggle="modal" data-target="#contact_info_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a></li>
                                    </ol>
                                </div>
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
                                    @if(isset($auth->educations) && $auth->educations->count() > 0)
                                        @foreach($auth->educations as $education)
                                            <div class="c_itme_ex">
                                                <div class="c_date">
                                                <a class="float-right text-danger delete_education" style="cursor: pointer;" data-id="{{ $education->id }}"><i class="fa fa-trash"></i></a>
                                                    <p>{{ isset($education->from_date) ? date("Y", strtotime($education->from_date)) : '<span class="text-danger"></span>' }} - {{ isset($education->to_date) ? date("Y", strtotime($education->to_date)) : '<span class="text-danger"></span>' }}</p>
                                                </div>
                                                <div class="c_company">
                                                    <p>
                                                    {{ isset($education->institution_name) ? $education->institution_name : '<span class="text-danger"></span>' }}
                                                    </p>
                                                </div>
                                                <div class="c_postionss">
                                                    <span>{{ isset($education->section) ? $education->section : '<span class="text-danger"></span>' }} - {{ isset($education->degree) ? $education->degree : '<span class="text-danger"></span>' }}
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a data-toggle="modal" data-target="#education_modal" style="cursor: pointer;"><i class="fas fa-plus"></i></a></li>
                                    </ol>
                                </div>
                            </div>

                            <div class="c_item c_skills">
                                <div class="c_titles">
                                    <h3>skills</h3>
                                </div>
                                <div id="skills_div">
                                    @if(isset($auth->skills) && $auth->skills->count() > 0)
                                        @foreach($auth->skills as $skill)
                                            <div class="c_temem">
                                                <a class="float-right text-danger delete_skill" style="cursor: pointer;" data-id="{{ $skill->id }}"><i class="fa fa-trash"></i></a>
                                                <h5>{{ isset($skill->skill_name) ? $skill->skill_name : '<span class="text-danger"></span>' }} </h5>
                                                <div class="c_progress" style="margin-top:10px;">
                                                    <div class="c_bar" style="width:{{ isset($skill->range) ? $skill->range : '0' }}%">
                                                        <p class="c_percent"> {{ isset($skill->range) ? $skill->range : '<span class="text-danger"></span>' }}%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>



                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a data-toggle="modal" data-target="#skills_modal" style="cursor: pointer;"><i class="fas fa-plus"></i></a></li>
                                    </ol>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


        {{-- Modals --}}

        {{-- Job Title Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="job_title_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>المسمى الوظيفي</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>المسمى الوظيفي :</h5>
                                    <input class="form-control" name="job_title" id="job_title" type="text" placeholder="ادخل المسمى الوظيفي">
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="job_title_btn">تحديث</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Job Title Modal --}}
        {{-- Over View Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="over_view_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>الوصف</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>الوصف :</h5>
                                    <textarea rows="3" class="form-control" name="over_view" id="over_view" type="text" placeholder="ادخل الوصف"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="over_view_btn">تحديث</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Over View Modal --}}
        {{-- Experience Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="experience_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>الخبرة</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>الشركة :</h5>
                                    <input type="text" class="form-control" name="experience_company" id="experience_company" placeholder="اسم الشركة">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>المسمى الوظيفي :</h5>
                                    <input type="text" class="form-control" name="experience_job_title" id="experience_job_title" placeholder="المسمى الوظيفي">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>الخبرة :</h5>
                                    <textarea rows="3" class="form-control" name="experience" id="experience" type="text" placeholder="الخبرة"></textarea>
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>من تاريخ :</h5>
                                    <input type="date" class="form-control" name="from_date_ex" id="from_date_ex" type="text" max="<?= date('Y-m-d'); ?>" placeholder="من تاريخ">
                                </div>
                                <div class="form-group col-md-12 row" >
                                    <div class="col-md-6">
                                        <h5>الى تاريخ :</h5>
                                        <input type="date" class="form-control" name="to_date_ex" id="to_date_ex" type="text" max="<?= date('Y-m-d'); ?>" placeholder="الى تاريخ">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>الى الان :</h5>
                                        <input type="checkbox" class="form-control" name="untill_now" id="untill_now" value="1" placeholder="الى تاريخ">
                                    </div>

                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="experience_btn">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Experience Modal --}}
        {{-- Contact Info Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="contact_info_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>معلومات التواصل</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>رقم الهاتف :</h5>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ isset($auth->info->phone) ? $auth->info->phone : null }}" placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>البريد الالكتروني :</h5>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ isset($auth->info->email) ? $auth->info->email : null }}" placeholder="البريد الالكتروني example@example.com">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>رابط التواصل :</h5>
                                    <input type="url" class="form-control" name="link" id="link" value="{{ isset($auth->info->link) ? $auth->info->link : null }}" placeholder="رابط التواصل https://example.com">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>العنوان :</h5>
                                    <textarea class="form-control" name="address" id="address"  type="text" placeholder="العنوان">={!! isset($auth->info->address) ? $auth->info->address : null !!}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="contact_info_btn">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Contact Info Modal --}}
        {{-- Skills Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="skills_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>المهارات</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>اسم المهارة :</h5>
                                    <input class="form-control" name="skill_name" id="skill_name" type="text" placeholder="ادخل اسم المهارة">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>نسبة الاتقان :</h5>
                                    <div class="d-flex flex-row">
                                        <input class="form-control p-0" name="range" id="range" type="range" min="0" max="100" value="0" onchange="range_value(this.value);">
                                        <h6 class="p-2" id="range_val"> 0% </h6>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="skill_btn">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Skills Modal --}}
        {{-- Education Modal  --}}
        <div class="c_login_modal">
            <div class="c-m-blocks modal fade" id="education_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>التعليم</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-12" >
                                    <h5>المؤسسة التعليمية :</h5>
                                    <input type="text" class="form-control" name="institution_name" id="institution_name" placeholder="اسم المؤسسة التعليمية">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>التخصص :</h5>
                                    <input type="text" class="form-control" name="section" id="section" placeholder="اسم التخصص">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>الدرجة :</h5>
                                    <input type="text" class="form-control" name="degree" id="degree" placeholder="الدرجة">
                                </div>
                                <div class="form-group col-md-12" >
                                    <h5>من تاريخ :</h5>
                                    <input type="date" class="form-control" name="from_date_edu" id="from_date_edu" type="text" max="<?= date('Y-m-d'); ?>" placeholder="من تاريخ">
                                </div>
                                <div class="form-group col-md-12" >
                                        <h5>الى تاريخ :</h5>
                                        <input type="date" class="form-control" name="to_date_edu" id="to_date_edu" type="text" max="<?= date('Y-m-d'); ?>" placeholder="الى تاريخ">
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-md btn-primary c_butnns" id="education_btn">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Education Modal --}}

        {{-- End Modals --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

        $("#browse").change(function() {
            var formData = new FormData($('#image_form')[0]);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.update_image') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#review-thumbnail-submit').attr('src', data['image']);

                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });

        });

        function HandleBrowseClick() {
            var fileinput = document.getElementById("browse");
            fileinput.click();
        }

        // function Handlechange() {
        //     var fileinput = document.getElementById("browse");
        //     var textinput = document.getElementById("filename");
        //     textinput.value = fileinput.value;
        // };




        $(document).on('click','#job_title_btn',function(){
            add_job_title();
        });

        $(document).on('click','#over_view_btn',function(){
            add_over_view();
        });

        $(document).on('click','#experience_btn',function(){
            add_experience();
        });


        $(document).on('click','.delete_ex',function(){
            delete_experience($(this));
        });
        $(document).on('click','.delete_skill',function(){
            delete_skill($(this));
        });


        $(document).on('click','#contact_info_btn',function(){
            add_contact_info();
        });


        $(document).on('click','#skill_btn',function(){
            add_skill();
        });

        $(document).on('click','#education_btn',function(){
            add_education();
        });



        $(document).on('click','.delete_education',function(){
            delete_education($(this));
        });


        function add_job_title(){

            job_title = $("#job_title").val();

            formData = new FormData();
            formData.append('job_title',job_title);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_job_title') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#job_title_txt').html('');
                    $('#job_title_txt').html(data['output']);
                    $('#job_title_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                });
            }
            });
        }

        function add_over_view(){

            over_view = $("#over_view").val();

            formData = new FormData();
            formData.append('over_view',over_view);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_over_view') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#over_view_txt').html('');
                    $('#over_view_txt').html(data['output']);
                    $('#over_view_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }


        function add_experience(){

            experience = $("#experience").val();
            experience_company = $("#experience_company").val();
            experience_job_title = $("#experience_job_title").val();
            from_date_ex = $("#from_date_ex").val();
            to_date_ex = $("#to_date_ex").val();
            untill_now = 2;
            if($('#untill_now').is(':checked'))
            {
                untill_now = 1;
            }

            formData = new FormData();
            formData.append('experience',experience);
            formData.append('company_name',experience_company);
            formData.append('job_title',experience_job_title);
            formData.append('from_date',from_date_ex);
            formData.append('to_date',to_date_ex);
            formData.append('untill_now',untill_now);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_experience') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#experiences_div').html('');
                    $('#experiences_div').html(data['output']);
                    $('#experience_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }



        function delete_experience(ex){

            id = ex.data('id');

            formData = new FormData();
            formData.append('id',id);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.delete_experience') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#experiences_div').html('');
                    $('#experiences_div').html(data['output']);
                    $('#experience_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }


        function add_contact_info(){

            email = $("#email").val();
            phone = $("#phone").val();
            link = $("#link").val();
            address = $("#address").val();

            formData = new FormData();
            formData.append('email',email);
            formData.append('phone',phone);
            formData.append('link',link);
            formData.append('address',address);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_contact_info') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#contact_info_ul').html('');
                    $('#contact_info_ul').html(data['output']);
                    $('#contact_info_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                });
            }
            });
        }


        function add_skill(){

            skill_name = $("#skill_name").val();
            range = $("#range").val();

            formData = new FormData();
            formData.append('skill_name',skill_name);
            formData.append('range',range);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_skills') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#skills_div').html('');
                    $('#skills_div').html(data['output']);
                    $('#skills_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                });
            }
            });
        }


        function delete_skill(skill){

            id = skill.data('id');

            formData = new FormData();
            formData.append('id',id);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.delete_skill') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#skills_div').html('');
                    $('#skills_div').html(data['output']);
                    $('#skills_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }


        function add_education(){

            institution_name = $("#institution_name").val();
            section = $("#section").val();
            degree = $("#degree").val();
            from_date_edu = $("#from_date_edu").val();
            to_date_edu = $("#to_date_edu").val();

            formData = new FormData();
            formData.append('institution_name',institution_name);
            formData.append('section',section);
            formData.append('degree',degree);
            formData.append('from_date',from_date_edu);
            formData.append('to_date',to_date_edu);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.add_education') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#education_div').html('');
                    $('#education_div').html(data['output']);
                    $('#education_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }



        function delete_education(skill){

            id = skill.data('id');

            formData = new FormData();
            formData.append('id',id);
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "{{ route('student.delete_education') }}",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data['status'] == true) {
                    $('#education_div').html('');
                    $('#education_div').html(data['output']);
                    $('#education_modal').modal('hide');
                }else{
                    swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                            button: "إغلاق",
                    });
                }
            },
            error: function(data) {
                swal("خطأ !!!", "حدث خطأ ما يرجى التأكد من المدخلات !!!", "error", {
                        button: "إغلاق",
                });
            }
            });
        }


        function range_value(val){
            $('#range_val').text(val +'%');
        }

    </script>
@endsection

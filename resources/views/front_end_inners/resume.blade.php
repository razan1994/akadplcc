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
                                <h4 id="job_title_txt">REAL ESTATE SALES MANAGER <a data-toggle="modal" data-target="#job_title_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a></h4>
                                <p id="over_view_txt">
                                    I’m Property Agent with considerable experience in
                                    selling property such as apartment, real estate, and
                                    residential

                                    <a data-toggle="modal" data-target="#over_view_modal" style="cursor: pointer;"><i class="fas fa-edit"></i></a>
                                </p>
                            </div>

                        </div>
                        <div class="c_image">
                            <input type="file" id="browse" name="image" style="display:none;" onchange="Handlechange();" />
                            <img id="review-thumbnail-submit" src="{{ asset('/front_end_style/images/omgs.png') }}" onclick="HandleBrowseClick();">
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
                                <div class="c_bdou">
                                    <div class="c_itme_ex">

                                        <ul>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Develop new comunity events and all signage to
                                                encourage and entice potential buyers
                                            </li>
                                            <li>
                                                Managig team how to selling real estate to buyer
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Planned and executed Company's marketing
                                                strategies
                                            </li>
                                            <li>
                                                Develop new comunity events and all signage to
                                                encourage and entice potential buyers
                                            </li>
                                            <li>
                                                Managig team how to selling real estate to buyer
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ol>
                                </div>
                            </div>

                            <div class="c_item c_contact">
                                <div class="c_titles">
                                    <h3>CONTACT</h3>
                                </div>
                                <ul>
                                    <li><i class="fas fa-phone-alt"></i><span>+123-456-7890</span></li>
                                    <li><i class="fas fa-envelope"></i><span>ello@reallygreatsite.com</span></li>
                                    <li><i class="fas fa-globe"></i><span>ww.reallygreatsite.com</span></li>
                                    <li><i class="fas fa-home"></i><span>123 Anywhere St., Any Cit</span></li>
                                </ul>

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
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
                                <div class="c_bdou">
                                    <div class="c_itme_ex">
                                        <div class="c_date">
                                            <p>2011 - 2014</p>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                Wardiere University
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>Bachelor Degree of Marketing
                                            </span>
                                        </div>
                                    </div>
                                    <div class="c_itme_ex">
                                        <div class="c_date">
                                            <p>2014 - 2016</p>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                Wardiere University
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>Master Degree of Marketing and Busines
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    </ol>
                                </div>
                            </div>

                            <div class="c_item c_skills">
                                <div class="c_titles">
                                    <h3>skills</h3>
                                </div>

                                <div class="c_temem">
                                    <h5>Good communication</h5>
                                    <div class="c_progress" style="margin-top:10px;">
                                        <div class="c_bar" style="width:85%">
                                            <p class="c_percent"> 85%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_temem">
                                    <h5>Digital Marketing too</h5>
                                    <div class="c_progress" style="margin-top:10px;">
                                        <div class="c_bar" style="width:80%">
                                            <p class="c_percent"> 80%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c_temem">
                                    <h5>Trend Forecasting</h5>
                                    <div class="c_progress" style="margin-top:10px;">
                                        <div class="c_bar" style="width:75%">
                                            <p class="c_percent"> 75%</p>
                                        </div>
                                    </div>
                                </div>



                                {{-- edit & add --}}

                                <div class="c_edotadd">
                                    <ol>
                                        <li><a href="#"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
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


        {{-- End Modals --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#review-thumbnail-submit').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#browse").change(function() {
            readURL(this);
        });

        function HandleBrowseClick() {
            var fileinput = document.getElementById("browse");
            fileinput.click();
        }

        function Handlechange() {
            var fileinput = document.getElementById("browse");
            var textinput = document.getElementById("filename");
            textinput.value = fileinput.value;
        };




        $(document).on('click','#job_title_btn',function(){
            add_job_title();
        });

        $(document).on('click','#over_view_btn',function(){
            add_over_view();
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


    </script>
@endsection

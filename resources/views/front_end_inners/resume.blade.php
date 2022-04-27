@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')
    <div class="body_inner">
        <div class="c_page_resume">
            <div class="container_900">
                <div class="c_topCv">
                    <div class="c_blockss">
                        <div class="c_infoss">
                            <div class="c_name">
                                <h2>DANI</h2>
                                <p>MARTINEZ</p>
                            </div>
                            <div class="c_postionss">
                                <h4>REAL ESTATE SALES MANAGER</h4>
                                <p>
                                    I’m Property Agent with considerable experience in
                                    selling property such as apartment, real estate, and
                                    residential
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
                                        <div class="c_date">
                                            <p>2016 - 2019</p>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                Shodwe Company
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>MARKETING MANAGER
                                            </span>
                                        </div>
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
                                        </ul>
                                    </div>
                                    <div class="c_itme_ex">
                                        <div class="c_date">
                                            <p>2019 - present</p>
                                        </div>
                                        <div class="c_company">
                                            <p>
                                                Handover and Take Company
                                            </p>
                                        </div>
                                        <div class="c_postionss">
                                            <span>MARKETING MANAGER
                                            </span>
                                        </div>
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
    </script>
@endsection

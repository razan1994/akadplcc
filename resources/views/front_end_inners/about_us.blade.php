@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')



    <div class="body_inner">

        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->
        <div class="inner-top">
            <div class="img-page">
                <img src="{{ asset('front_end_style/images/inimgprod.png') }}">
            </div>
            <div class="title-page">
                <h1>About Us</h1>
            </div>
        </div>
        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->

        <!-- ================================================================================================== -->
        <!-- ======================================== content about us ======================================== -->
        <!-- ================================================================================================== -->
        <div class="page_about" id="mainContent">
            <div class="container_1200">
                <div class="c_view_content">
                    <div class="c_how_is">
                        <div class="c_verti_tit">
                            <span>About Us</span>
                        </div>
                        <div class="c_field">
                            <h3>WHO IS HTEE</h3>
                            <p>{!! isset($aboutUs->about_us_en) ? $aboutUs->about_us_en : '<span style="color: red;">Undefined</span>' !!}</p>
                        </div>
                    </div>
                    <div class="c_vison_mission">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="c_item">
                                    <div class="c_verti_tit">
                                        <span>OUR MISSION</span>
                                    </div>
                                    <div class="c_field">
                                        <p>{!! isset($aboutUs->mission_en) ? $aboutUs->mission_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="c_item">
                                    <div class="c_verti_tit">
                                        <span>OUR VISION</span>
                                    </div>
                                    <div class="c_field">
                                        <p>{!! isset($aboutUs->vision_en) ? $aboutUs->vision_en : '<span style="color: red;">Undefined</span>' !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

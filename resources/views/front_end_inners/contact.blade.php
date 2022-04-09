@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')



    <div class="body_inner">

        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->
        <div class="inner-top">

            <div class="c_title_top">
                <div class="container_1200">
                    <div class="title_page">
                        <h1>اتصل بنا</h1>
                    </div>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>اتصل بنا</a></p>
                </div>
            </div>
        </div>
        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->

        <!-- ================================================================================================== -->
        <!-- ======================================== content about us ======================================== -->
        <!-- ================================================================================================== -->
        <div class="c_page_contact c_inner_body" id="mainContent">

            <div class="c_section_1">
                <div class="container_1200">
                    <div class="row">
                        <div class="col-md-6">
                        
                            <div class="c_info">
                                <ul>
                                    <li><a href="tel:07777777777"><i class="fas fa-phone-alt"></i> 07777777777 </a></li>
                                    <li><a href="mailto:info@kanaf.com"><i class="fas fa-envelope"></i> info@kanaf.com </a></li>
                                </ul>
                            </div>
                            <div class="c_form_contat">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
                                            placeholder="الاسم" required></label>
                                        </div>

                                        {{-- new --}}
                                        <div class="form-group col-md-12">
                                            <input type="nubmer" class="form-control" name="phone" id="formGroupExampleInput"
                                            placeholder="رقم الهاتف" required>
                                        </div>
            
                                        <div class="form-group  col-md-12">
                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                                placeholder="الرسالة" 
                                                required>الرسالة</textarea>
                                        </div>
                                    </div>
                                    <button class="c_butnns" type="submit" >ارسل</button>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-6">
        
                            <div class="c_imgs">

                                <div class="c_bgimg c_bg_1">
                                    <img src="{{ asset('front_end_style/images/bg1slider.png') }}">
                                </div>
                                <div class="c_item">
                                    <div class="c_image">
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    </div>
                                </div>
        
                                <div class="c_bgimg c_bg_2">
                                    <img src="{{ asset('front_end_style/images/bg2slider.png') }}">
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

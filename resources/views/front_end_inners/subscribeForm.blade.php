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
                        <h1>الاشتراك</h1>
                    </div>
                </div>
            </div>
            <div class="c-breadcrumps">
                <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الاشتراك</a></p>
                </div>
            </div>
        </div>
        <!-- ================================================================================================== -->
        <!-- ======================================== inner-top =============================================== -->
        <!-- ================================================================================================== -->

        <!-- ================================================================================================== -->
        <!-- ======================================== content about us ======================================== -->
        <!-- ================================================================================================== -->
        <div class="c_page_subscribe c_inner_body" id="mainContent">

            <div class="container_1200">
                <div class="c_block">
                    <div class="c_box">
                        <div class="c_subs_now">
                            <h4>
                                اشترك الأن
                            </h4>
                        </div>
                        <div class="c_form_subscr">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
        
                                <div class="row">

                                    <div class="form-group col-md-12">
                                        <label>اختر طريقة الدفع </label>
                                        <div class="c_form_chekc">
                                            <div class="c-checkbox checkbox-paypal">
                                                <label ><input value="paypal" type="radio" name="chec">
                                                    <h5></h5>
                    
                                                </label>
                                            </div>
                                            <div class="c-checkbox checkbox-master">
                                                <label ><input value="master" type="radio" name="chec">
                                                    <h5></h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                

                                    <div class="form-group col-md-12">
                                        <label>الاسم على البطاقة</label>
                                        <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
                                        placeholder="" required></label>
                                    </div>

                                    {{-- new --}}
                                    <div class="form-group col-md-12">
                                        <label>رقم البطاقة</label>
                                        <input type="text" class="form-control" name="number" id="formGroupExampleInput"
                                        placeholder="" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>تاريخ البطاقة</label>
                                        <input type="date" class="form-control" name="number" id="formGroupExampleInput"
                                        placeholder="" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>cvv</label>
                                        <input type="text" class="form-control" name="number" id="formGroupExampleInput"
                                        placeholder="" required>
                                    </div>
        
                                   
                                </div>
                                <button class="c_butnns" type="submit">اشتراك</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

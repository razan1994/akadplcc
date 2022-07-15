@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')

<div id="alert_div">
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
    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="inner-top">

        <div class="c_title_top">
            <div class="container_1200">
                <div class="title_page">
                    <h1>الاختبار</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
            <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الاختبار</a></p>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_test c_page_testAnswer c_inner_body">
        <div class="c_mainContent">
            <div class="container_1200">
                <div class="c_block">

                    <div class="c_done">
                        <img alt="" src="{{ asset('/front_end_style/images/Ellips.png') }}">
                    </div>
                    <div class="c_item_test">
                        <h3>أجوبة الأسئلة</h3>
                        <div class="c_qustion">
                            <form>
                                <div class="form-group">
                                    <h5>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ  ؟ </h5>
                                    <div class="form-check">
                                        <label class="form-check-label c_true" for="flexRadioDefault1"> 
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" disabled>
                                            <span>
                                           أ . هناك حقيقة مثبتة منذ زمن طويل 
                                            </span>
                                           
                                        </label>
                                    </div>
                                    <div class="form-check"> 
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                            <span>
                                            ب . هناك حقيقة مثبتة منذ زمن طويل
                                            </span>
                                           
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3"> 
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" disabled>
                                            <span>
                                           ج . هناك حقيقة مثبتة منذ زمن طويل 
                                            </span>
                                          
                                        </label>
                                    </div>
                                    <div class="form-check"> 
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" disabled>
                                            <span>
                                            د . هناك حقيقة مثبتة منذ زمن طويل
                                            </span>
                                            
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ  ؟ </h5>
                                    <div class="form-check">
                                        <label class="form-check-label c_false" for="flexRadioDefaul1" > 
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaul1" disabled>
                                            <span>
                                           أ . هناك حقيقة مثبتة منذ زمن طويل 
                                            </span>
                                           
                                        </label>
                                    </div>
                                    <div class="form-check"> 
                                        <label class="form-check-label" for="flexRadioDefaul2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaul2" disabled>
                                            <span>
                                            ب . هناك حقيقة مثبتة منذ زمن طويل
                                            </span>
                                           
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefaul3"> 
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaul3" disabled>
                                            <span>
                                           ج . هناك حقيقة مثبتة منذ زمن طويل 
                                            </span>
                                          
                                        </label>
                                    </div>
                                    <div class="form-check"> 
                                        <label class="form-check-label" for="flexRadioDefaul4">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaul4" disabled>
                                            <span>
                                            د . هناك حقيقة مثبتة منذ زمن طويل
                                            </span>
                                            
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

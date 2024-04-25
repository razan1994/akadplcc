@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])

@section('content')
    <div class="c_inner_body">
        <div class="c_mainContent">
            {{-- اضافة نص بموضوع 404 --}}
            <div class="container_1200">
                <div class="c_block">
                    <div class="row justify-content-center">
                        <div class="col-md-10 ">
                            <div class="c_item" style="padding:  30px 0;">
                                <div class="c_image d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('/front_end_style/images/404.svg') }}" loading="lazy"
                                        style="height: 30vh; width: 100%">
                                </div>
                                <div class="container py-3 text-center">
                                    <div class="row">
                                        <div class="mx-auto col-md-6">
                                            <div class="c_post">
                                                <div class="c_body">
                                                    <h1>الصفحة غير موجودة</h1>
                                                    <p>للأسف، لم نتمكن من العثور على الصفحة التي تبحث عنها.</p>
                                                </div>
                                                <div class="mt-4 c_buttn">
                                                    <a href="{{ route('welcome') }}" wire:navigate>الرجوع إلى الصفحة
                                                        الرئيسية</a>
                                                </div>
                                            </div>
                                        </div>
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

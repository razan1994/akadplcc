@extends('front_end_layout.app_front_end', ['title' => 'الصفحة الرئيسية'])


@push('styles')
    <style>
        #generatedCode {
            cursor: pointer;
            margin: 0 5px;
            transition: 0.3s;
            padding: 5px 10px;
        }

        #generatedCode:hover {
            box-shadow: 0 0 5px 0 #000;
            border-radius: 15px
        }

        .styled-list li {
            list-style: circle inside;
            padding-right: 10px;
        }
    </style>
@endpush
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
                    <h1>الملف الشخصي</h1>
                </div>
            </div>
        </div>
        <div class="c-breadcrumps">
            <div class="container_1200">
                <p><a href="{{ route('welcome') }}">الرئيسية</a> <span>»</span> <a>الملف الشخصي</a></p>
            </div>
        </div>
    </div>

    <!-- ================================================================================================== -->
    <!-- ======================================== inner-top =============================================== -->
    <!-- ================================================================================================== -->
    <div class="c_page_profile c_inner_body">
        <div class="container_1200">
            <div class="c_mainContent">

                <div class="c-right">
                    <div class="quieq_tap">
                        <ul class="nav nav-tabs menu_contact" id="myTab" role="tablist">
                            <li class="nav-item c_logic">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#prof1" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    الصفحة الشخصية
                                </a>
                            </li>

                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#myWallet" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    محفظتي
                                </a>
                            </li>

                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#myCourses" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    دوراتي
                                </a>
                            </li>

                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof2" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    الابحاث
                                </a>
                            </li>
                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof3" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    شهاداتي
                                </a>
                            </li>
                            <li class="nav-item c_logic">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#prof4" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    السيرة الذاتية
                                </a>
                            </li>
                            <li class="nav-item c_logoutoic">
                                <a class="nav-link" id="home-tab" href="{{ route('student.logout') }}" aria-controls="home"
                                    aria-selected="true">
                                    تسجيل الخروج
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="c-left">
                    <div class="tab-content" id="myTabContent">
                        <div role="tabpanel" class="tab-pane fade active show c_editInfo" id="prof1">
                            @php
                                $lastPayment = auth('student')->user()->payments()->latest()->first();
                            @endphp
                            <div>
                                @if ($lastPayment && $lastPayment->due_at > \Carbon\Carbon::now())
                                    <div class="px-3 py-2">
                                        <p>
                                            <b>
                                                فعال لغاية :
                                            </b>
                                            <br>
                                            @php
                                                \Carbon\Carbon::setLocale('ar');
                                                $timestamp = \Carbon\Carbon::parse($lastPayment->due_at);
                                            @endphp
                                            {{-- parse the date for format YYY--MM--DD --}}
                                            {{ \Carbon\Carbon::parse($timestamp)->format('Y/m/d') . '     -     ( ' . $timestamp->diffForHumans() . ')' }}
                                        </p>
                                    </div>
                                @endif
                                <div class="px-3 py-2">
                                    <p>
                                        <b class="pb-2">
                                            كود الاحالة :
                                        </b>
                                        <br>
                                        <span id="generatedCode" class="px-2 ">
                                            {{ auth('student')->user()->own_code }}
                                            <i id="copyCode" class="fa fa-copy"></i>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <form action="{{ route('student.update-student-profile') }}" method="POST">
                                @csrf
                                <div class="row">
                                    @php
                                        $lastUpdate = \Carbon\Carbon::parse(auth('student')->user()->name_updated_at);
                                        $now = \Carbon\Carbon::now();
                                        $diffInDays = $lastUpdate->diffInDays($now);
                                        $diff = 60 - $diffInDays;

                                        $canUpdateName = (auth('student')->user()->name_updated_at == null
                                                ? true
                                                : $diffInDays >= 60)
                                            ? true
                                            : false;
                                    @endphp
                                    {{-- Name --}}
                                    <div class="form-group col-md-6 col-12">
                                        <label>اسم المستخدم </label>
                                        <input type="text" value="{{ auth('student')->user()->name }}" name="name"
                                            @readonly($canUpdateName) class="" placeholder="" id="name_ar">
                                        {{-- add note for: the name can updated ionly every 60 day --}}
                                        <span>
                                            <strong>تنبيه!</strong>
                                            <small class="text-danger">
                                                @if (auth('student')->user()->name_updated_at)
                                                    @if ($canUpdateName)
                                                        يمكن تحديث الاسم مرة كل 60 يوم (التحديث القادم في
                                                        {{ $diff }} يوم)
                                                    @else
                                                        يمكن تحديث الاسم مرة كل 60 يوم
                                                    @endif
                                                @else
                                                    يمكن تحديث الاسم مرة كل 60 يوم
                                                @endif
                                            </small>
                                        </span>
                                    </div>

                                    {{-- E-mail --}}
                                    <div class="form-group col-md-6 col-12">
                                        <label>البريد الالكتروني </label>
                                        <input type="email" value="{{ auth('student')->user()->email }}" name="email"
                                            class="" placeholder="" id="email">
                                    </div>

                                    {{-- Phone --}}
                                    <div class="form-group col-md-6 col-12">
                                        <label>رقم الهاتف </label>
                                        <input type="text" value="{{ auth('student')->user()->phone }}" name="phone"
                                            class="" placeholder="" id="phone">
                                    </div>

                                    {{-- Button --}}
                                    <div class="col-md-12">

                                        <button type="submit" class="btn btn-sm btn-primary">حفظ التغييرات</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        {{-- My Courses Tab --}}
                        <div role="tabpanel" class="tab-pane fade" id="myCourses">
                            <div class="c_research">
                                <div class="row">
                                    @forelse (auth('student')->user()->courses as $item)
                                        <a href="{{ route('course-details', encrypt($item->id)) }}"
                                            class="col-md-3 col-12">
                                            <div class="rounded-lg card">
                                                <div class="card-header">
                                                    <img src="{{ asset($item->main_image) }}">
                                                </div>
                                                <div class="card-body">
                                                    <h5>{{ $item->title_ar }}</h5>
                                                    <p>{{ $item->description }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @empty

                                        <div>
                                            <h3 class="text-center">لا يوجد دورات</h3>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>


                        {{-- My Wallet Tab --}}
                        <div role="tabpanel" class="tab-pane fade c_editInfo" id="myWallet">
                            <div class="c_research">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>
                                            <b>عدد نقاطي :</b>
                                            <strong>
                                                {{ auth('student')->user()->points }}
                                            </strong> نقطة
                                        </h5>
                                        <p>
                                            <small>
                                                <b>عدد النقاط المسحوبة :</b>
                                                <strong>
                                                    {{ auth('student')->user()->totalWithdrawlsPoints() }}
                                                </strong> نقطة

                                            </small>
                                        </p>
                                        <hr>
                                        يمكنك استخدام النقاط لعدة امور من ضمنها :
                                        <ul class="styled-list">
                                            <li>
                                                التسجيل في المنصة.
                                            </li>
                                            <li>
                                                طلب سحب النقاط (علما بانه يجب ان يكون لديك على الاقل
                                                {{ $public_values['maximum_points_for_withdrawls'] }} نقطة لطلب السحب).
                                            </li>
                                        </ul>
                                        <hr>
                                        <p class="pt-1">
                                            <b>ملاحظة :</b>
                                            <br>
                                            كل 100 نقطة تعادل 10 د.أ
                                        </p>

                                    </div>

                                    @php
                                        $lastOrderRequest = auth('student')
                                            ->user()
                                            ->paymentWalletOrders()
                                            ->latest()
                                            ->first();
                                    @endphp
                                    @if (auth('student')->user()->points >= $public_values['maximum_points_for_withdrawls'])
                                        @if ($lastOrderRequest && $lastOrderRequest->status == 'pending')
                                            <div class="col-12">
                                                <div class="alert alert-warning">
                                                    <p>
                                                        <b>
                                                            لديك طلب سابق لم يتم الرد عليه بعد
                                                        </b>
                                                        <br>
                                                        <b>
                                                            تاريخ الطلب :
                                                        </b>
                                                        {{ $lastOrderRequest->created_at->toDateString() }}
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            {{-- Button --}}
                                            <div class="pt-2 col-md-12">
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#requestOrder"> طلب سحب النقاط </button>
                                            </div>
                                        @endif
                                    @endif
                                    <hr>
                                    @if (auth('student')->user()->paymentWalletOrders->count())
                                        <h5 class="mt-4">
                                            <b>طلبات السحب السابقة :</b>
                                        </h5>
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>تاريخ الطلب</th>
                                                            <th>الحالة</th>
                                                            <th>عدد النقاط</th>
                                                            <th>نوع السحب</th>
                                                            <th>الرسالة</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (auth('student')->user()->paymentWalletOrders as $order)
                                                            <tr>
                                                                <td>{{ $order->created_at->toDateString() }}</td>
                                                                <td>
                                                                    @if ($order->status == 'pending')
                                                                        <span class="badge badge-warning">قيد
                                                                            الانتظار</span>
                                                                    @elseif($order->status == 'paid')
                                                                        <span class="badge badge-success">تم الدفع</span>
                                                                    @else
                                                                        <span class="badge badge-danger">مرفوض</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ $order->amount }}</td>
                                                                <td>
                                                                    @if ($order->type == 'wallet')
                                                                        المحفظة الالكترونية
                                                                    @else
                                                                        باي بال
                                                                    @endif
                                                                </td>
                                                                <td>{{ $order->message ?? '--' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="prof2">
                            <div class="c_research">
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h3>هناك حقيقة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h3>هناك حقيقة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h3>هناك حقيقة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h3>هناك حقيقة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/parnter.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h3>هناك حقيقة </h3>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي
                                                    القارئ عن التركيز على الشكل الخارجي للنص </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prof3">
                            <div class="c_certifcate">
                                <div class="c_add_certif">
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                            </div>
                                            <div class="c_body">
                                                <h5 style="text-align:center;">هناك حقيقة </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="prof4">
                            <div class="c_certifcate">
                                <div class="c_add_certif">
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-first') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-second') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="c_item">
                                            <div class="c_image">
                                                <a href="{{ route('student.cv-third') }}">
                                                    <img src="{{ asset('/front_end_style/images/sertv3.png') }}">
                                                </a>
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


    {{-- Modals --}}
    {{-- 
        
            $table->enum('status', ['pending', 'paid', 'rejected'])->default('pending');
            $table->string('message')->nullable();
            --}}
    <div class="modal fade" id="requestOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        طلب سحب النقاط 
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('student.request-withdrawl-order') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-row">
                            {{-- Name --}}
                            <div class="form-group col-12">
                                <label for="validationServer01">الاسم</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="validationServer01"
                                    placeholder="الاسم" value="{{ old('name', auth('student')->user()->name) }}"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- phone --}}
                            <div class="form-group col-12">
                                <label for="validationServer01">رقم الهاتف</label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" id="validationServer01"
                                    placeholder="رقم الهاتف" value="{{ old('phone', auth('student')->user()->phone) }}"
                                    required>
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- type ['wallet' | 'paypal'] --}}
                            <div class="form-group col-12">
                                <label for="typw">
                                    نوع السحب
                                </label>
                                <br>
                                <div class="gap-5 d-flex">
                                    <div class="mx-4 d-flex align-items-center">
                                        <input type="radio" id="wallet" name="type" value="wallet" checked>
                                        <label class="mx-2" for="wallet">المحفظة الالكترونية</label>
                                    </div>
                                    <div class="mx-4 d-flex align-items-center">
                                        <input type="radio" id="paypal" name="type" value="paypal">
                                        <label class="mx-2" for="paypal">باي بال</label>
                                    </div>
                                </div>
                            </div>


                            {{-- payment wallet --}}
                            <div class="form-group col-12" id="paymentWallets">
                                <label for="validationServer01">المحفظة
                                    الالكترونية</label>
                                <select class="form-control" id="wallet_id" name="payment_wallet_id">
                                    <option value="0" disabled selected>اختر
                                        المحفظة الالكترونية</option>
                                    @foreach ($paymentWallets as $wallet)
                                        <option value="{{ $wallet->id }}">
                                            {{ $wallet->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('payment_wallet_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- email --}}
                            <div class="form-group col-12 " id="emailInput">
                                <label for="email">الايميل</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="الاسم" value="{{ old('email', auth('student')->user()->email) }}"
                                    >
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- message --}}
                            <div class="form-group col-12">
                                <label for="validationServer01">رسالة</label>
                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="validationServer01"
                                    placeholder="رسالة">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <small>
                                <strong>
                                    الرجاء التأكد من البيانات قبل عملية الطلب
                                </strong>
                                <br>
                                <strong>
                                    سيتم التواصل معكم بعد الطلب في اقرب وقت
                                </strong>
                            </small>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">
                            طلب
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        // Copy the code
        document.getElementById('copyCode').addEventListener('click', function() {
            var copyText = document.getElementById('generatedCode').innerText.trim();
            var textArea = document.createElement("textarea");
            textArea.value = copyText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            textArea.remove();
            swal("", "تم نسخ الكود بنجاح", "info", {
                button: "حسناً",
            });
        });


        // now i want another code to copy the code when click on the code itself
        document.getElementById('generatedCode').addEventListener('click', function() {
            var copyText = document.getElementById('generatedCode').innerText.trim();
            var textArea = document.createElement("textarea");
            textArea.value = copyText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            textArea.remove();
            swal("", "تم نسخ الكود بنجاح", "info", {
                button: "حسناً",
            });
        });

        $(document).ready(function() {
            // hide the email 
            $('#emailInput').hide();
            
            // show the payment wallets when the type is wallet
            $('input[name="type"]').change(function() {
                if ($(this).val() == 'wallet') {
                    $('#emailInput').slideUp();
                    $('#paymentWallets').slideDown();
                } else {
                    $('#emailInput').slideDown();
                    $('#paymentWallets').slideUp();
                }
            });
        });
    </script>
@endpush

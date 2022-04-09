@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            {{-- =========================================================== --}}
            {{-- ================== Sweet Alert Section ==================== --}}
            {{-- =========================================================== --}}
            <div>
                @if (session()->has('success'))
                    <script>
                        swal("Great Job !!!", "{!! Session::get('success') !!}", "success", {
                            button: "OK",
                        });
                    </script>
                @endif
                @if (session()->has('danger'))
                    <script>
                        swal("oops !!!", "{!! Session::get('danger') !!}", "error", {
                            button: "Close",
                        });
                    </script>
                @endif
            </div>

            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Update Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.contact_us-index') }}">
                                    <span class="mdi mdi-account-group"></span> Contact Us
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>

                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">

                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.contact_us-update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">

                                                {{-- Email --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Email : <strong class="text-danger"> * @error('email') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-email"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="email" name="email" class="form-control"
                                                            id="validationServer01" placeholder="Email"
                                                            value="{!! isset($contact->email) ? $contact->email : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>

                                                {{-- Phone --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Phone : <strong class="text-danger"> * @error('phone') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="phone" class="form-control"
                                                            id="validationServer01" placeholder="Phone"
                                                            value="{!! isset($contact->phone) ? $contact->phone : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>

                                                {{-- Facebook Url --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Facebook URL : <strong class="text-danger"> * @error('facebook_url') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="facebook_url" class="form-control"
                                                            id="validationServer01" placeholder="Facebook URL"
                                                            value="{!! isset($contact->facebook_url) ? $contact->facebook_url : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>
                                                {{-- Facebook Url --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Instagram URL : <strong class="text-danger"> * @error('instagram_url') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="instagram_url" class="form-control"
                                                            id="validationServer01" placeholder="Instagram URL"
                                                            value="{!! isset($contact->instagram_url) ? $contact->instagram_url : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>
                                                {{-- Facebook Url --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Linkedin URL : <strong class="text-danger"> * @error('linkedin_url') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="linkedin_url" class="form-control"
                                                            id="validationServer01" placeholder="Linkedin URL"
                                                            value="{!! isset($contact->linkedin_url) ? $contact->linkedin_url : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>
                                                {{-- Facebook Url --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Twitter URL : <strong class="text-danger"> * @error('twitter_url') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="twitter_url" class="form-control"
                                                            id="validationServer01" placeholder="Twitter URL"
                                                            value="{!! isset($contact->twitter_url) ? $contact->twitter_url : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>
                                                {{-- Facebook Url --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Youtube URL : <strong class="text-danger"> * @error('youtube_url') ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="youtube_url" class="form-control"
                                                            id="validationServer01" placeholder="Youtube URL"
                                                            value="{!! isset($contact->youtube_url) ? $contact->youtube_url : "<span style='color:red;'>Undefined</span>" !!}">
                                                    </div>
                                                </div>

                                            </div>
                                            <button class="btn btn-primary" type="submit">Edit</button>
                                        </form>
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

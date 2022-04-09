@extends('admin.layouts.app')

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
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <div>

                    <a href="{{ route('super_admin.contact_us-edit', $contact->id) }}" class="mb-1 btn btn-primary"><i
                            class="mdi mdi-playlist-edit"></i> Edit </a>
                </div>
            </div>

            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Email</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->email) ? $contact->email : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Phone</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->phone) ? $contact->phone : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Facebook URL</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->facebook_url) ? $contact->facebook_url : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Linkedin URL</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->linkedin_url) ? $contact->linkedin_url : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Instagram URL</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->instagram_url) ? $contact->instagram_url : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Twitter URL</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->twitter_url) ? $contact->twitter_url : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="text-center pb-4">
                                                        <h3 class="pb-2" style="color: blue">Youtube URL</h3>
                                                        <p class="text-dark">
                                                            {!! isset($contact->youtube_url) ? $contact->youtube_url : "<span style='color:red;'>Undefined</span>" !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="w-100">
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

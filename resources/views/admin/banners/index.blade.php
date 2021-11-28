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
                    <h1>Banners</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Banners</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('super_admin.banners-edit', $banner->id) }}" class="mb-1 btn btn-primary"><i class="mdi mdi-playlist-edit"></i> Edit </a>
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
                                    <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                                        {{-- <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> طلبات سحب الرصيد : </h2> --}}
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            {{-- Banner 1 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 1 : 270*510</h5>
                                                    @if (isset($banner) && $banner->image_1 && file_exists($banner->image_1))
                                                        <img style="height: 150px" src="{{ asset($banner->image_1) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*510) Status : {{ isset($banner->status_1) ? $banner->status_1 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_1_url) ? $banner->banner_1_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 1 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 2 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 2 : 570*240</h5>
                                                    @if (isset($banner) && $banner->image_2 && file_exists($banner->image_2))
                                                        <img style="height: 150px" src="{{ asset($banner->image_2) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(570*240) Status : {{ isset($banner->status_2) ? $banner->status_2 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_2_url) ? $banner->banner_2_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 2 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 3 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 3 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_3 && file_exists($banner->image_3))
                                                        <img style="height: 150px" src="{{ asset($banner->image_3) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_3) ? $banner->status_3 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_3_url) ? $banner->banner_3_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 3 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 4 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 4 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_4 && file_exists($banner->image_4))
                                                        <img style="height: 150px" src="{{ asset($banner->image_4) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_4) ? $banner->status_4 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_4_url) ? $banner->banner_4_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 4 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 5 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 5 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_5 && file_exists($banner->image_5))
                                                        <img style="height: 150px" src="{{ asset($banner->image_5) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_5) ? $banner->status_5 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_5_url) ? $banner->banner_5_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 5 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 6 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 6 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_6 && file_exists($banner->image_6))
                                                        <img style="height: 150px" src="{{ asset($banner->image_6) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_6) ? $banner->status_6 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_6_url) ? $banner->banner_6_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 6 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 7 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 7 : 570*430</h5>
                                                    @if (isset($banner) && $banner->image_7 && file_exists($banner->image_7))
                                                        <img style="height: 150px" src="{{ asset($banner->image_7) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(570*430) Status : {{ isset($banner->status_7) ? $banner->status_7 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_7_url) ? $banner->banner_7_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 7 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 8 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 8 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_8 && file_exists($banner->image_8))
                                                        <img style="height: 150px" src="{{ asset($banner->image_8) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_8) ? $banner->status_8 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_8_url) ? $banner->banner_8_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 8 : URL (Click Here) </a>
                                                </div>
                                            </div>
                                            {{-- Banner 9 --}}
                                            <div class="col-md-4 m-auto">
                                                <div class="card card-mini mb-4">
                                                    <h5 class="rounded p-1 text-light bg-danger  text-center">Banner 9 : 270*240</h5>
                                                    @if (isset($banner) && $banner->image_9 && file_exists($banner->image_9))
                                                        <img style="height: 150px" src="{{ asset($banner->image_9) }}" width="auto">
                                                    @else
                                                        <img style="height: 150px" src="{{ asset('images_default/default.jpg') }}" width="auto">
                                                    @endif
                                                    <span class="rounded p-1 text-light bg-danger  text-center">Banner(270*240) Status : {{ isset($banner->status_9) ? $banner->status_9 : 'Undefined' }}</span>
                                                </div>
                                                <div class="card card-mini mb-4">
                                                    <a href="{{ isset($banner->banner_9_url) ? $banner->banner_9_url : '#' }}" class="mb-1 btn btn-primary" target="_blank">Banner 9 : URL (Click Here) </a>
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

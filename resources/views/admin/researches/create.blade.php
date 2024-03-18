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
                        swal("Oops !!!", "{!! Session::get('danger') !!}", "error", {
                            button: "Close",
                        });
                    </script>
                @endif
            </div>



            <div class="breadcrumb-wrapper breadcrumb-contacts">
                {{-- ============================================== --}}
                {{-- ================== Header ==================== --}}
                {{-- ============================================== --}}
                <div>
                    <h1>Add New Research</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.researches.index') }}">
                                    <i class="far fa-newspaper"></i></span> All Researches
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"> Add New</li>
                        </ol>
                    </nav>
                </div>

                {{-- ============================================== --}}
                {{-- ==================== Body ==================== --}}
                {{-- ============================================== --}}
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2> Add New Research :</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.researches.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Title <strong class="text-danger"> *
                                                            @error('title')
                                                                -
                                                                {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-format-title"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title" required
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Title "
                                                            value="{{ old('title') }}">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Image <strong class="text-danger">
                                                            * @error('image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="image" class="form-control" required
                                                            id="validationServer01" placeholder="image" accept="image/*">
                                                    </div>
                                                </div>

                                                {{-- Main Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01"> Research File <strong class="text-danger">
                                                            * @error('image')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cloud-upload"></span>
                                                        </div>
                                                        <input type="file" name="file" class="form-control"
                                                            id="validationServer01" required>
                                                    </div>
                                                </div>

                                                {{-- Status --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"> Status
                                                        <strong class="text-danger"> * @error('status')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="status" class="selectpicker" data-live-search="true"
                                                            required data-width="88%" id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose...</option>
                                                            <option value="1"
                                                                @if (old('status') == '1') selected @endif>
                                                                Active
                                                            </option>
                                                            <option value="0"
                                                                @if (old('status') == '0') selected @endif>
                                                                Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>



                                                {{-- @lang('front_end.News_Blog_Details_AR') --}}
                                                <div class="mb-3 col-md-12">
                                                    <label class="mb-3 text-dark font-weight-medium"> Small Description :
                                                        <strong class="text-danger"> @error('desc_ar')
                                                                - {{ $message }}
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <textarea id="desc_ar" name="description" class="form-control ">{{ old('desc_ar') }}</textarea>
                                                </div>

                                                <div class="mb-3 col-md-12">
                                                    <div class="input-group">
                                                        <button class="btn btn-primary" type="submit">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
        {{-- <script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

        <script>
                CKEDITOR.replace( 'desc_ar',{
                    fullPage: true,
                    allowedContent: true
                });
                CKEDITOR.replace( 'desc_en',{
                    fullPage: true,
                    allowedContent: true
                });
        </script> --}}
        {{-- ========================================================== --}}
        {{-- ================ Advance Text Area Section =============== --}}
        {{-- ========================================================== --}}
    @endsection

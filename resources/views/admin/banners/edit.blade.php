@extends('admin.layouts.app')

@section('admin_css')
    <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">

            <div class="breadcrumb-wrapper breadcrumb-contacts">
                {{-- ============================================== --}}
                {{-- ================== Header ==================== --}}
                {{-- ============================================== --}}
                <div>
                    <h1><i class="mdi mdi-playlist-plus"></i>Update Banner</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.banners.index') }}"> <i class="mdi mdi-account-group"></i>
                                    All Banners </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-plus"></i>Update
                                Banner
                            </li>
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
                                    <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.banners.update', $banner->id) }}" method="POST"
                                            enctype="multipart/form-data" id="createForm">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">

                                                {{-- Title AR --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name : <strong class="text-danger">
                                                            * @error('title')
                                                                (
                                                                {{ $message }} )
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="title" required
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Banner name"
                                                            value="{{ old('title', $banner->title) }}">
                                                    </div>
                                                </div>




                                                {{-- Image --}}
                                                <div class="mb-3 col-md-6">
                                                    <label class="mb-3 text-dark font-weight-medium"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-image"></i> Image : <strong class="text-danger">
                                                            @error('image')
                                                                ( {{ $message }} )
                                                            @enderror
                                                        </strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-image"></span>
                                                        </div>
                                                        <input type="file" name="image" class="form-control" 
                                                            id="validationServer01" placeholder="Image" accept="image/*">

                                                    </div>
                                                    <div id="imagePreviewer">
                                                        @if (isset($banner->image) && $banner->image && file_exists($banner->image))
                                                            <img src="{{ asset($banner->image) }}" class="img-fluid"
                                                                style="max-width: 100px;">
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            {{-- Button --}}
                                            <button class="btn btn-primary" type="submit">
                                                <i class="mdi mdi-playlist-plus"></i>
                                                Update
                                            </button>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            console.log('ready')
            // Image Previewer
            $('input[name="image"]').change(function(e) {
                console.log('changed')
                if (e.target.files.length) {
                    $('#imagePreviewer').html('');
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreviewer').append('<img src="' + e.target.result +
                            '" class="img-fluid" style="max-width: 100px;">');
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    </script>
@endpush

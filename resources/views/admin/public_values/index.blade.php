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
                    <h1>Public Values</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <span class="mdi mdi-home"></span> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.privacy_policies-index') }}">
                                    <i class="fas fa-user-secret"></i> All Public Values
                                </a>
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
                                        <form action="{{ route('super_admin.public_values-update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">
                                                @foreach ($public_values as $key => $value)
                                                    <div class="mb-3 col-md-6">
                                                        <label class="mb-3 text-dark font-weight-medium"
                                                            for="validationServer01">{{ $key }}: <strong
                                                                class="text-danger">
                                                                @error($key)
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
                                                            <input type="text" name="{{ $key }}"
                                                                class="form-control @error($key) is-invalid @enderror"
                                                                id="validationServer01" placeholder="{{ $key }}"
                                                                value="{{ old($key, $value) }}" disabled>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="btn btn-info" id="editBtn" type="button">Edit</button>
                                            <button class="btn btn-primary" type="submit">Update</button>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.editor1'))
            .catch(error => {
                console.error(error);
            });

        // when click on edit button make all inputs enabled
        document.getElementById('editBtn').addEventListener('click', function() {
            var inputs = document.querySelectorAll('input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].disabled = false;
            }
        });
    </script>
@endsection

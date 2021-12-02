@extends('admin.layouts.app')

@section('admin_css')
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

            {{-- ============================================== --}}
            {{-- ================== Header ==================== --}}
            {{-- ============================================== --}}
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1><i class="mdi mdi-account-multiple"></i> All Colors</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi  mdi-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi  mdi-account-multiple"></i> All
                                Colors</li>
                        </ol>
                    </nav>
                </div>

            </div>

            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                </div>
                <div style="margin-top: 2%;margin-left: 2%;border: 1px solid blue;border-radius: 22px;padding: 20px;width: 90%;">
                    <form action="{{ route('super_admin.color-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            {{-- Name AR --}}
                            <div class="col-md-3 mb-3">
                                <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                    <i class="mdi mdi-account"></i> Name AR  : <strong class="text-danger"> *
                                        @error('name_ar') (
                                        {{ $message }} ) @enderror</strong>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                    </div>
                                    <input type="text" name="name_ar"
                                        class="form-control @error('name_ar') is-invalid @enderror" id="validationServer01"
                                        placeholder="Name AR" value="{{ old('name_ar') }}">
                                </div>
                            </div>
                            {{-- Name EN --}}
                            <div class="col-md-3 mb-3">
                                <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                    <i class="mdi mdi-account"></i> Name EN  : <strong class="text-danger"> *
                                        @error('name_en') (
                                        {{ $message }} ) @enderror</strong>
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                    </div>
                                    <input type="text" name="name_en"
                                        class="form-control @error('name_en') is-invalid @enderror" id="validationServer01"
                                        placeholder="Name EN" value="{{ old('name_en') }}">
                                </div>
                            </div>
                            {{-- Color Code --}}
                            <div class="col-md-2 mb-3">
                                <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                    <i class="mdi mdi-account"></i> Color  : <strong class="text-danger"> *
                                        @error('color_code') (
                                        {{ $message }} ) @enderror</strong>
                                </label>
                                <div class="input-group">

                                    <input type="color" name="color_code"
                                        class="form-control @error('color_code') is-invalid @enderror" id="color_code"
                                        placeholder="Color" value="{{ old('color_code') }}">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <button class="btn btn-primary" type="submit" style="margin-top: 9.5%;width: 50%;"><i class="mdi mdi-playlist-plus"></i> Add</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="mdi mdi-account"></i> Name Ar</th>
                                <th><i class="mdi mdi-account"></i> Name EN</th>
                                <th><i class="mdi mdi-account"></i> Color </th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($colors))
                                @if ($colors->count() > 0)
                                    @foreach ($colors as $index => $color)
                                        <tr>
                                            <td>{!! isset($color->id) ? $color->id : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($color->name_ar) ? $color->name_ar : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($color->name_en) ? $color->name_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($color->color_code) ? '<div style ="width : 50%; height: 25px; background-color: ' . $color->color_code . '" ></div>' : "<span style='color:red;'>None</span>" !!}</td>

                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('admin_javascript')
    <script>
        jQuery(document).ready(function() {
            jQuery('#hoverable-data-table').DataTable({
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}">
    </script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}">
    </script>

    <script>
        $("#color_code").on('change',function(){
            console.log($(this).val());
        });
    </script>

@endsection

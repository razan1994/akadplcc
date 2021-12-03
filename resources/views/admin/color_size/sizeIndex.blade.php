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
                    <h1><i class="mdi mdi-account-multiple"></i> All Sizes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi  mdi-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi  mdi-account-multiple"></i> All
                                Sizes</li>
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
                    <form action="{{ route('super_admin.size-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            {{-- Name AR --}}
                            <div class="col-md-4 mb-3">
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
                            <div class="col-md-4 mb-3">
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
                                <th><i class="mdi mdi-account"></i> Updated By</th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($sizes))
                                @if ($sizes->count() > 0)
                                    @foreach ($sizes as $index => $size)
                                        <tr>
                                            <td>{!! isset($size->id) ? $size->id : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td id="name_ar_td_{{ $size->id }}">{!! isset($size->name_ar) ? $size->name_ar : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td id="name_en_td_{{ $size->id }}">{!! isset($size->name_en) ? $size->name_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td>{!! isset($size->user->name_en) ? $size->user->name_en : "<span style='color:red;'>Undefined</span>" !!}</td>
                                            <td><button data-toggle="modal" data-target="#sizes_edit_modal" style="cursor: pointer;" class="mb-1 btn btn-sm btn-success edit_size"
                                                data-id="{{ $size->id }}" data-name_ar="{{ $size->name_ar }}" data-name_en="{{ $size->name_en }}"><i class="mdi mdi-playlist-edit"></i> Edit </button>
                                                <a href="{{ route('super_admin.size-destroy', [$size->id]) }}" title="Permanently Delete" class="confirm mb-1 btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
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
    <div class="c_reviess_modal">
        <div class="modal fade" id="sizes_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content" style="text-align: center;font-size: 12pt;font-weight: 900">

                    <div class="modal-header">
                        <h5 class="modal-title">Update Size :</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" style="text-align: left;">
                            <form action="{{ route('super_admin.size-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="size_id" id="size_id">
                                <div class="form">
                                    {{-- Name AR --}}
                                    <div class="col-md-12 mb-3">
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
                                                class="form-control @error('name_ar') is-invalid @enderror" id="size_name_ar"
                                                placeholder="Name AR" value="">
                                        </div>
                                    </div>
                                    {{-- Name EN --}}
                                    <div class="col-md-12 mb-3">
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
                                                class="form-control @error('name_en') is-invalid @enderror" id="size_name_en"
                                                placeholder="Name EN" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <a class="btn btn-primary" id="update_size" style="margin-top: 2%;width: 100%; cursor: pointer; size: #fff"><i class="mdi mdi-playlist-edit"></i> update</a>
                                    </div>

                                </div>
                            </form>

                        </div>

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
        $(".edit_size").on('click',function(){

            $("#size_id").val($(this).data("id"));
            $("#size_name_ar").val($(this).data("name_ar"));
            $("#size_name_en").val($(this).data("name_en"));

        });

        $(document).on('click','#update_size',function(){

            size_id = $("#size_id").val();
            size_name_ar = $("#size_name_ar").val();
            size_name_en = $("#size_name_en").val();

            formData = new FormData();

            formData.append('size_id',size_id);
            formData.append('size_name_ar',size_name_ar);
            formData.append('size_name_en',size_name_en);


        $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: "{{ route('super_admin.size-update') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data['status'] == true) {
                        $("#name_ar_td_"+size_id).html(size_name_ar);
                        $("#name_en_td_"+size_id).html(size_name_en);

                        $("#sizes_edit_modal").modal('hide');
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Ooops',
                            text: data.msg,
                            width: 400,
                        })
                    }
                },
                error: function(data) {
                    error = JSON.parse(data.responseText);

                    message = "";
                    counter = 1;
                    $.each(error.errors ,function (key, val) {
                        message += "\n" + counter + " : " + val;
                        counter ++ ;
                    });
                    // console.log(message);
                    swal({
                            icon: 'error',
                            title: 'please correct The Following :',
                            text:  message,
                            width: 400,
                        });
                }
        });


// JSON.parse(data.responseText)

        });
    </script>

@endsection

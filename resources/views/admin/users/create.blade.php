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
                    <h1><i class="mdi mdi-playlist-plus"></i> Add New User</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <i class="mdi mdi-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.users-index') }}">
                                    <i class="mdi mdi-account-group"></i> All Users
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-plus"></i> Add New User</li>
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
                                        <form action="{{ route('super_admin.users-store') }}" method="POST"
                                            enctype="multipart/form-data" id="createForm">
                                            @csrf
                                            <div class="form-row">

                                                {{-- Name in AR --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name AR : <strong
                                                            class="text-danger"> * @error('name_ar') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_ar"
                                                            class="form-control @error('name_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Name AR"
                                                            value="{{ old('name_ar') }}">
                                                    </div>
                                                </div>

                                                {{-- Name EN --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Name EN : <strong
                                                            class="text-danger"> * @error('name_en') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_en"
                                                            class="form-control @error('name_ar') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Name EN"
                                                            value="{{ old('name_en') }}">
                                                    </div>
                                                </div>

                                                {{-- Username --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account"></i> Username : <strong
                                                            class="text-danger"> * @error('username') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="username"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Username"
                                                            value="{{ old('username') }}">
                                                    </div>
                                                </div>

                                                {{-- E-mail --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationDefaultUsername">
                                                        <i class="mdi mdi-email"></i> Email : <strong
                                                            class="text-danger"> * @error('email') ( {{ $message }}
                                                            ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-email"></span>
                                                        </div>
                                                        <input type="email" name="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="validationDefaultUsername" placeholder="Email"
                                                            value="{{ old('email') }}"
                                                            aria-describedby="inputGroupPrepend2">
                                                    </div>
                                                </div>

                                                {{-- Phone --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-phone"></i> Phone : <strong
                                                            class="text-danger"> * @error('phone') ( {{ $message }}
                                                            ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"></span>
                                                        </div>
                                                        <input type="number" name="phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Phone"
                                                            value="{{ old('phone') }}">
                                                    </div>
                                                </div>
                                                
                                                {{-- Password --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-key"></i> Password : <strong
                                                            class="text-danger"> * @error('password') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-key"></span>
                                                        </div>
                                                        <input type="password" name="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            id="password" placeholder="Password"
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>

                                                {{-- Confirm Password --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-key"></i> Confirm Password : <strong
                                                            class="text-danger"> * @error('password_confirmation') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-key"></span>
                                                        </div>
                                                        <input type="password" name="password_confirmation"
                                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                                            id="password_confirmation" placeholder="Confirm Password"
                                                            autocomplete="new-password">
                                                    </div>
                                                </div>

                                                {{-- User Status --}}
                                                <div class="col-md-12 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-switch"></i> User Status : <strong
                                                            class="text-danger"> * @error('user_status') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-check"></span>
                                                        </div>
                                                        <select name="user_status"
                                                            class="custom-select my-1 mr-sm-2 @error('user_status') is-invalid @enderror"
                                                            id="inlineFormCustomSelectPref">
                                                            <option value="">Select User Status...</option>
                                                            <option value="1" @if (old('user_status') == '1') selected @endif>Pendding</option>
                                                            <option value="2" @if (old('user_status') == '2') selected @endif>Active</option>
                                                            <option value="3" @if (old('user_status') == '3') selected @endif>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">Country : <strong class="text-danger">
                                                            * @error('country_id') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">

                                                        <select id="country_id" name="country_id" class="selectpicker"
                                                            data-live-search="true" data-width="88%"
                                                            id="inlineFormCustomSelectPref">
                                                            <option value="" selected>Choose a country...</option>
                                                            @if (isset($public_countries))
                                                                @foreach ($public_countries as $public_country)
                                                                    <option value="{{ $public_country->id }}"@if (old('country_id') != null)@if (old('country_id') == $public_country->id) selected @endif @else @if ($public_country->id == '111') selected @endif @endif>
                                                                @if (Config::get('app.locale') == 'ar')
                                                                        {{ $public_country->name_ar }}
                                                                @elseif ( Config::get('app.locale') == 'en' )
                                                                        {{ $public_country->name_en }}
                                                                @endif
                                                                </option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">City : <strong class="text-danger">
                                                            * @error('region_id') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <input type="hidden" value="{{ old('region_id') }}"
                                                            id="region_id_old_value">
                                                        <select name="region_id" id="region_id" class="selectpicker"
                                                            data-live-search="true" data-width="88%">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">User Description AR   <strong
                                                            class="text-danger">
                                                            * @error('user_description_en') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="user_description_ar"
                                                            class="form-control "
                                                            rows="10">{{ old('user_description_ar') != null ? old('user_description_ar') : null }} </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">User Description EN   <strong
                                                            class="text-danger">
                                                            * @error('user_description_en') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="user_description_en"
                                                            class="form-control "
                                                            rows="10">{{ old('user_description_en') != null ? old('user_description_en') : null }} </textarea>
                                                    </div>
                                                </div>

                                                {{-- User Image --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-image"></i> User Image : <strong
                                                            class="text-danger"> @error('profile_photo_path')* (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-image"></span>
                                                        </div>
                                                        <input type="file" name="profile_photo_path" class="form-control"
                                                            id="validationServer01" placeholder="User Image">
                                                    </div>
                                                </div>

                                            </div>
                                            {{-- Button --}}
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-playlist-plus"></i> Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('admin_javascript')
    <script src="https://cdn.tiny.cloud/1/uze3r9dfhut169wyk3qp6lvudqwpac0rbkigzudv9qfhahqx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <script>
        $(document).ready(function() {
            getRegions();
        });

        $("#country_id").change(function() {
            getRegions();
        });

        function getRegions() {
            var formData = new FormData($('#createForm')[0]);
            $.ajax({
                type: 'post',
                url: "{{ route('super_admin.getRegions') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    if (data.status == true) {
                        var selectRegions = '<option value="">Choose the region ... </option>';
                        for (var key in data.regions) {
                            // skip loop if the property is from prototype
                            if (!data.regions.hasOwnProperty(key)) continue;

                            var obj = data.regions[key];
                            // alert(obj.id);
                            for (var prop in obj) {
                                // skip loop if the property is from prototype
                                if (!obj.hasOwnProperty(prop)) continue;

                                // your code
                                var region_id_old_value = $("#region_id_old_value").val();
                                if (region_id_old_value) {
                                    if (obj.id == region_id_old_value) {
                                        selectRegions += '<option value="' + obj.id + '" selected>' + obj
                                            .name_ar + '</option>';
                                    } else {
                                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                                            '</option>';
                                    }
                                } else {
                                    selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                                        '</option>';
                                }
                                break;
                            }
                        }
                        $('#region_id').html(selectRegions);

                        $('.selectpicker').selectpicker('refresh');
                    }

                },
                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
            });
        }
    </script>
    @endsection

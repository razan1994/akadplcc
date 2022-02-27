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
                    <h1><i class="mdi mdi-playlist-edit"></i> Update {{ isset($user_type) ? $user_type : 'User' }} Information</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}">
                                    <i class="mdi mdi-home"></i> Dashboard
                                </a>
                            </li>
                            @if(isset($user_type))
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.users-index',$user_type) }}">
                                    <i class="mdi mdi-account-group"></i> All {{ isset($user_type) ? $user_type : 'User' }}s
                                </a>
                            </li>
                            @endif
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-edit"></i> Edit</li>
                        </ol>
                    </nav>
                </div>

                {{-- ============================================== --}}
                {{-- =================== Body ===================== --}}
                {{-- ============================================== --}}
                <div class="content-wrapper">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default">
                                    <div class="card-header justify-content-between " style="background-color: #4c84ff;">
                                        {{-- <h2 style="color:white;"><i class="mdi mdi-star mdi-spin"></i> طلبات سحب الرصيد : </h2> --}}
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('super_admin.users-update', [$user->id]) }}" method="POST"
                                            id="createForm" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_type" value="{{ isset($user_type) ? $user_type : '--------' }}">
                                            <input type="hidden" name="region_id_old_value" value="{{ isset($user->region_id) ? $user->region_id : '--------' }}">
                                            <div class="form-row">

                                                {{-- Name in Arabic --}}
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
                                                            value="{{ isset($user->name_ar) ? $user->name_ar : null }}">
                                                    </div>
                                                </div>

                                                {{-- Name in English --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"><i class="mdi mdi-account">
                                                        </i> Name EN : <strong class="text-danger"> * @error('name_en') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="name_en"
                                                            class="form-control @error('name_en') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Name EN"
                                                            value="{{ isset($user->name_en) ? $user->name_en : null }}">
                                                    </div>
                                                </div>

                                                {{-- Username --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01"><i class="mdi mdi-account">
                                                        </i> Username : <strong class="text-danger"> * @error('username')
                                                            ( {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <input type="text" name="username"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Username"
                                                            value=" {{ isset($user->username) ? $user->username : null }}">
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
                                                            id="validationDefaultUsername" placeholder="E-mail"
                                                            value="{{ isset($user->email) ? $user->email : null }}"
                                                            aria-describedby="inputGroupPrepend2">
                                                    </div>
                                                </div>

                                                {{-- Phone --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-cellphone"></i> Phone : <strong
                                                            class="text-danger"> * @error('phone') ( {{ $message }}
                                                            ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cellphone"></span>
                                                        </div>
                                                        <input type="text" name="phone"
                                                            class="form-control @error('phone') is-invalid @enderror"
                                                            id="validationServer01" placeholder="Phone"
                                                            value="{{ isset($user->phone) ? $user->phone : null }}">
                                                    </div>
                                                </div>

                                                @if(isset($user_type) && $user_type == "Doctor")
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-account-question"></i> Doctor Speciality : <strong
                                                            class="text-danger"> * @error('speciality_id') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-question"></span>
                                                        </div>
                                                        <select name="speciality_id[]" class="selectpicker"
                                                        data-live-search="true" data-width="88%" multiple
                                                        id="inlineFormCustomSelectPref">
                                                            <option>Select Doctor Speciality...</option>
                                                            @if (isset($specialities))
                                                                @foreach ($specialities as $speciality)
                                                                        <option value="{{ $speciality->id }}"
                                                                            @if ($user->specialities->contains('speciality_id', $speciality->id))) selected @endif>{{ $speciality->name_en }}
                                                                        </option>
                                                                @endforeach
                                                            @endif
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @endif

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
                                                        <i class="mdi mdi-account-key"></i> Password Confirm : <strong
                                                            class="text-danger"> * @error('password_confirmation') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-account-key"></span>
                                                        </div>
                                                        <input type="password" name="password_confirmation"
                                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                                            id="password_confirmation" placeholder="Password Confirm"
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
                                                            <span class="input-group-text mdi mdi-account-switch"></span>
                                                        </div>
                                                        @if (isset($user_type))
                                                            @if ($user_type == 'Super Admin')
                                                                <input type="hidden" name="user_status" value="2">
                                                                <!-- 2 => Active -->
                                                            @endif
                                                            <select
                                                                {{ $user_type == 'Super Admin' ? 'disabled' : '' }}
                                                                name="user_status"
                                                                class="custom-select my-1 mr-sm-2 @error('user_status') is-invalid @enderror"
                                                                id="inlineFormCustomSelectPref">
                                                                <option value="" selected>Choose User Status...</option>
                                                                @if (isset($user_type))
                                                                    <option value="1" @if (isset($user->user_status) && $user->user_status == 'Pendding') selected @endif>Pendding
                                                                    </option>
                                                                    <option value="2" @if (isset($user->user_status) && $user->user_status == 'Active') selected @endif>Active
                                                                    </option>
                                                                    <option value="3" @if (isset($user->user_status) && $user->user_status == 'Inactive') selected @endif>Inactive
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        @endif
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
                                                                    <option value="{{ $public_country->id }}"
                                                                        @if ($user->country_id == $public_country->id) selected @endif>
                                                                        {{ $public_country->name_en }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" id="region_id_div">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">City : <strong class="text-danger">
                                                            * @error('region_id') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <input type="hidden" value="{{ $user->region_id }}"
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
                                                            * @error('user_description_ar') - {{ $message }}
                                                            @enderror</strong></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-book-open"
                                                                id="inputGroupPrepend2"></span>
                                                        </div>
                                                        <textarea name="user_description_ar" id="editor1"
                                                            class="form-control "
                                                            rows="10" cols="10">{{ isset($user->user_description_ar) ? $user->user_description_ar : null }} </textarea>
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
                                                        <textarea name="user_description_en" id="editor2"
                                                            class="form-control "
                                                            rows="10">{{ isset($user->user_description_en) ? $user->user_description_en : null }} </textarea>
                                                    </div>
                                                </div>
                                                @if(isset($user_type) && $user_type == "Doctor")
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-cash"></i> Visit Fees : <strong
                                                            class="text-danger"> * @error('visit_fees') ( {{ $message }}
                                                            ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-cash"></span>
                                                        </div>
                                                        <input type="number" class="form-control" name="visit_fees" value="{{ $user->visit_fees }}" min="0.01" step="0.01">
                                                    </div>
                                                </div>
                                                @endif

                                                {{-- User Image Filed --}}
                                                <div class="col-md-6 mb-3">
                                                    <label class="text-dark font-weight-medium mb-3"
                                                        for="validationServer01">
                                                        <i class="mdi mdi-image"></i> User Image : <strong
                                                            class="text-danger"> @error('profile_photo_path') (
                                                            {{ $message }} ) @enderror</strong>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text mdi mdi-image"></span>
                                                        </div>
                                                        <input type="file" name="profile_photo_path" class="form-control"
                                                            id="validationServer01">
                                                    </div>
                                                    @if (isset($user->profile_photo_path))
                                                        @if ($user->profile_photo_path && file_exists($user->profile_photo_path))
                                                            <img src="{{ asset($user->profile_photo_path) }}" width="100" height="100" style="border-radius: 10px; border:solid 1px black;">
                                                        @else
                                                            <img src="{{ asset('front_end_style/images/profilesf.png') }}" width="100" height="100">
                                                        @endif
                                                    @else
                                                        <img src="{{ asset('front_end_style/images/profilesf.png') }}" width="100" height="100">
                                                    @endif
                                                </div>

                                            </div>

                                            {{-- Button --}}
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save-all"></i> Save Updates</button>
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
            setTimeout(() => {

            getRegions();
            }, 500);
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
                        var name ="Nothing Selected..";
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
                                        name = obj.name_ar;
                                        selectRegions += '<option value="' + obj.id + '" selected>' + obj.name_ar + '</option>';
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
                        $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                        // alert(name);
                        $selected_value.text(name);
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

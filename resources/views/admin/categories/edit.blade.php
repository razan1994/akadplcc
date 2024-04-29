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
                    <h1><i class="mdi mdi-playlist-plus"></i>Update Category</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.categories.index') }}"> <i class="mdi mdi-account-group"></i>
                                    All Categories </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-playlist-plus"></i>Update
                                Category
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
                                        <form action="{{ route('super_admin.categories.update', $category->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row align-items-center">
                                                <div
                                                    class="form-group col-md-6
                                                    @error('name') has-error @enderror">
                                                    <label for="name">Name Ar*</label>
                                                    <input type="name" name="name" class="form-control" id="name"
                                                        placeholder="Enter category name"
                                                        value="{{ old('name', $category->name) }}" required>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div
                                                    class="form-group col-md-6
                                                @error('name_en') has-error @enderror">
                                                    <label for="name_en">Name En*</label>
                                                    <input type="name_en" name="name_en" class="form-control" id="name_en"
                                                        placeholder="Enter category name_en"
                                                        value="{{ old('name_en', $category->name_en) }}" required>
                                                    @error('name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                @if ($category->parent_id != null)
                                                    <div class="form-group col-md-6">
                                                        <label for="parent_id">Parent</label>
                                                        <select name="parent_id" id="parent_id" class="form-control">
                                                            @if (isset($mainCategories))
                                                                @if ($mainCategories->count() > 0)
                                                                    @foreach ($mainCategories as $mainCategory)
                                                                        <option value="{{ $mainCategory->id }}"
                                                                            @selected($mainCategory->id == $category->parent_id)>
                                                                            {{ $mainCategory->name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        </select>
                                                    </div>

                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Category</button>
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

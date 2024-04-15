@extends('admin.layouts.app')

@section('admin_css')
    {{-- <link href="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.css') }}"
        rel="stylesheet"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.min.css') }}"> --}}
    {{-- <link href="{{ asset('dashboard_files/assets/css/sleek.css') }}"> --}}
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
                    <h1><i class="mdi mdi-account-multiple"></i> All Categories</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.dashboard') }}"> <i class="mdi mdi-home"></i> Dashboard </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi mdi-account-multiple"></i> All
                                Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="mb-4 card">
                <div class="card-header">
                    <h4 class="card-title">Add new category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('super_admin.categories.store') }}" method="post">
                        @csrf
                        <div class="row align-items-center">
                            <div
                                class="form-group col-md-6
                                @error('name') has-error @enderror">
                                <label for="name">Name Ar*</label>
                                <input type="name" name="name" class="form-control" id="name"
                                    placeholder="Enter category name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div
                                class="form-group col-md-6
                            @error('name_en') has-error @enderror">
                                <label for="name_en">Name En*</label>
                                <input type="name_en" name="name_en" class="form-control" id="name_en"
                                    placeholder="Enter category name_en" value="{{ old('name_en') }}" required>
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="parent_id">Parent</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="">
                                        Select Parent Category
                                    </option>
                                    @if (isset($mainCategories))
                                        @if ($mainCategories->count() > 0)
                                            @foreach ($mainCategories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- ============================================== --}}
            {{-- =================== Body ===================== --}}
            {{-- ============================================== --}}
            <div class="card card-default">
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="mdi mdi-account-switch"></i> Name</th>
                                <th><i class="mdi mdi-account-switch"></i> Name en</th>
                                <th>Slug</th>
                                <th>
                                    Sub Categories
                                </th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Super Admin --}}
                            @if (isset($mainCategories))
                                @if ($mainCategories->count() > 0)
                                    @foreach ($mainCategories as $category)
                                        <tr>
                                            <td style="text-align: center">{{ $loop->iteration }}</td>
                                            <td style="text-align: center">
                                                {{ isset($category->name) ? $category->name : 'Undefined' }}
                                            </td>
                                            <td style="text-align: center">
                                                {{ isset($category->name_en) ? $category->name_en : 'Undefined' }}
                                            </td>
                                            <td>
                                                {{ isset($category->slug) ? $category->slug : 'Undefined' }}
                                            </td>

                                            <td>
                                                <span class="badge badge-warning">
                                                    {{ isset($category->childrens_count) ? $category->childrens_count : 0 }}
                                                </span>
                                                <a href="{{ route('super_admin.categories.show', $category->id) }}"
                                                    class="btn btn-secondary btn-sm">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>

                                            </td>

                                            <td class="gap-1 d-flex">
                                                <a href="{{ route('super_admin.categories.edit', $category->id) }}"
                                                    class=" btn btn-primary btn-sm"><i class="mdi mdi-playlist-edit"></i>
                                                </a>

                                                <form action="{{ route('super_admin.categories.destroy', $category->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="mx-1 btn btn-danger btn-sm delete_form"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="mdi mdi-delete-forever"></i>
                                                    </button>
                                                </form>
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
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
@endsection

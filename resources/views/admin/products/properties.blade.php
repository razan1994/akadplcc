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
                            <li class="breadcrumb-item">
                                <a href="{{ route('super_admin.products-show',[$product->id]) }}"> <i class="mdi  mdi-home"></i> Product Details
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><i class="mdi  mdi-account-multiple"></i> Product Properties</li>
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
                    <form action="{{ route('super_admin.properties-store',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-row col-md-10">
                                {{-- Name AR --}}
                                <div class="col-md-6 mb-3">
                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                        <i class="mdi mdi-account"></i> Color  : <strong class="text-danger"> *
                                            @error('main_color_id') (
                                            {{ $message }} ) @enderror</strong>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                        </div>
                                        <select name="main_color_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            @if(isset($colors) && $colors->count() > 0)
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}" style="font-weight: bolder ;color: {{ $color->color_code }}">{{ $color->name_en }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Name EN --}}
                                <div class="col-md-6 mb-3">
                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                        <i class="mdi mdi-account"></i> Size  : <strong class="text-danger"> *
                                            @error('main_size_id') (
                                            {{ $message }} ) @enderror</strong>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mdi mdi-account" id="inputGroupPrepend2"></span>
                                        </div>
                                        <select name="main_size_id" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            @if(isset($sizes) && $sizes->count() > 0)
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->name_en }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{-- Update Price --}}
                                <div class="col-md-6 mb-3">
                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                        <i class="mdi mdi-account"></i> Update Price  : <strong class="text-danger"> *
                                            @error('update_price')
                                            {{ $message }} ) @enderror</strong>
                                    </label>
                                    <div class="input-group">

                                        <input type="number" name="update_price"
                                            class="form-control" step="0.01"
                                            placeholder="Update Price" value="{{ old('update_price') }}">
                                    </div>
                                </div>
                                {{-- Quantity --}}
                                <div class="col-md-6 mb-3">
                                    <label class="text-dark font-weight-medium mb-3" for="validationServer01">
                                        <i class="mdi mdi-account"></i> Quantity  : <strong class="text-danger"> *
                                            @error('quantity')
                                            {{ $message }} ) @enderror</strong>
                                    </label>
                                    <div class="input-group">

                                        <input type="number" name="quantity"
                                            class="form-control" step="1" min="0"
                                            placeholder="Qiuantity" value="{{ old('quantity') }}">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-playlist-plus"></i> Add</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="hoverable-data-table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="mdi mdi-account"></i> Color Name</th>
                                <th><i class="mdi mdi-account"></i> Color</th>
                                <th><i class="mdi mdi-account"></i> Size</th>
                                <th><i class="mdi mdi-account"></i> Update Price </th>
                                <th><i class="mdi mdi-account"></i> Quantity </th>
                                <th><i class="mdi mdi-settings mdi-spin"></i> Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($product))
                                @if(isset($product->properties) && $product->properties->count() > 0)
                                    @foreach ($product->properties as $key => $property)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $property->color->name_en }} </td>
                                            <td><div style="width: 50%;height: 20px; background-color: {{ $property->color->color_code }}"></div> </td>
                                            <td>{{ $property->size->name_en }}</td>
                                            <td>{{ $property->update_price }}</td>
                                            <td>{{ $property->quantity }}</td>
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

@endsection

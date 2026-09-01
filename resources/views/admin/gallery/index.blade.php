@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            @include('admin.gallery.partials.alerts')

            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}"><span class="mdi mdi-home"></span> Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">All Gallery Items</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('super_admin.gallery-create') }}" class="mb-1 btn btn-primary"><i class="mdi mdi-playlist-plus"></i> Add New</a>
                    <a href="{{ route('super_admin.gallery-showSoftDelete') }}" class="mb-1 btn btn-danger"><i class="mdi mdi-delete"></i> Archive</a>
                </div>
            </div>

            <div class="card card-default">
                <div class="card-header card-header-border-bottom"><h2>Gallery Items</h2></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="hoverable-data-table" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Preview</th>
                                    <th class="text-center">Title AR</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Order</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleryItems as $item)
                                    <tr>
                                        <td class="text-center">
                                            @if ($item->type === 'video')
                                                @if ($item->poster_path)
                                                    <img src="{{ asset($item->poster_path) }}" width="90" height="70" style="object-fit:cover;border-radius:8px" alt="">
                                                @else
                                                    <video width="90" height="70"><source src="{{ asset($item->file_path) }}"></video>
                                                @endif
                                            @else
                                                <img src="{{ asset($item->file_path) }}" width="90" height="70" style="object-fit:cover;border-radius:8px" alt="">
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $item->title_ar ?: '-' }}</td>
                                        <td class="text-center"><span class="badge {{ $item->type === 'video' ? 'badge-info' : 'badge-primary' }}">{{ ucfirst($item->type) }}</span></td>
                                        <td class="text-center">{{ $item->sort_order }}</td>
                                        <td class="text-center">
                                            {!! $item->status == 2 ? '<span class="text-success">Active</span>' : '<span class="text-danger">Inactive</span>' !!}
                                        </td>
                                        <td class="text-center">{{ $item->created_at?->format('Y-m-d') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('super_admin.gallery-edit', $item->id) }}" class="mb-1 btn btn-sm btn-success"><i class="mdi mdi-playlist-edit"></i></a>
                                            <a href="{{ route('super_admin.gallery-softDelete', $item->id) }}" class="mb-1 confirm btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin_javascript')
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/plugins/data-tables/datatables.bootstrap4.min.js') }}"></script>
    <script>
        jQuery(function () {
            jQuery('#hoverable-data-table').DataTable({
                pageLength: 20,
                order: [[3, 'asc']]
            });
        });
    </script>
@endsection

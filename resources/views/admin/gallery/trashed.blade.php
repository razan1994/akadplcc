@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper"><div class="content">
        @include('admin.gallery.partials.alerts')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div><h1>Gallery Archive</h1><nav><ol class="p-0 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}"><span class="mdi mdi-home"></span> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('super_admin.gallery-index') }}">Gallery</a></li>
                <li class="breadcrumb-item">Archive</li>
            </ol></nav></div>
        </div>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom"><h2>Archived Gallery Items</h2></div>
            <div class="card-body"><div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead><tr><th>Title</th><th>Type</th><th>Deleted At</th><th>Control</th></tr></thead>
                    <tbody>
                        @foreach ($galleryItems as $item)
                            <tr>
                                <td>{{ $item->title_ar ?: '-' }}</td>
                                <td>{{ ucfirst($item->type) }}</td>
                                <td>{{ $item->deleted_at }}</td>
                                <td><a href="{{ route('super_admin.gallery-softDeleteRestore', $item->id) }}" class="btn btn-sm btn-success"><i class="mdi mdi-redo-variant"></i> Restore</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div></div>
        </div>
    </div></div>
@endsection

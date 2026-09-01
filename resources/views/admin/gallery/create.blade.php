@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper"><div class="content">
        @include('admin.gallery.partials.alerts')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div><h1>Add Gallery Item</h1><nav><ol class="p-0 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}"><span class="mdi mdi-home"></span> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('super_admin.gallery-index') }}">Gallery</a></li>
                <li class="breadcrumb-item">Add New</li>
            </ol></nav></div>
        </div>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom"><h2>Add New Image or Video</h2></div>
            <div class="card-body">
                <form action="{{ route('super_admin.gallery-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.gallery.partials.form')
                </form>
            </div>
        </div>
    </div></div>
@endsection

@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('banners.index') }}">Banners</a></li>
                        <li class="breadcrumb-item active">Banner Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Banner details -->
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Title:</strong> {{ $banner->title }}</p>
                            <div class="form-group">
                                <label for="photo">Photo:</label><br>
                                <img src="{{ asset('images/'.$banner->photo) }}" alt="Banner Photo" style="max-width: 30%;">
                            </div><br>
                            <div class="form-group">
                                <p><strong>Status:</strong>
                                    @if ($banner->status)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

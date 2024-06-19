@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1 class="display-5">Update Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>    

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="{{ route('updateprofile.update') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="d-flex flex-column justify-content-center max-w-xs p-4 rounded bg-white mt-3 text-dark">
                                <img src="{{ asset($user->image) }}" alt="" class="shadow mx-auto rounded-circle bg-secondary" style="width: 100px; height:100px;">
                                <div class="text-center mt-3 pt-3">
                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-success rounded-pill">Edit Photo</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center border-top border-success bg-white">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

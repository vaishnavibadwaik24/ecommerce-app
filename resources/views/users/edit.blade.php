{{-- route = users.store --}}

@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper" style="width: 160%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                  </div>
                  <div class="form-group"> 
                    <label for="photo">Old Image</label>
                    <img src="{{ asset('assets/img/'.$user->image) }}" alt="Profile" style="max-width: 60px; max-height: 60px;">
                  </div>
                  <div class="form-group">
                    <label for="photo">New Image</label>
                    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}">
                  </div>
                    <div class="form-group">
                      <label for="role_id">Role ID</label>&nbsp;
                      <select name="role_id" id="role_id">
                          <option value="{{ $user->role_id }}">{{ $user->role_id }}</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->
            
                <div class="card-footer">
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
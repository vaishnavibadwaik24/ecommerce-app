@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <div class="ml-auto">
                    <a href="{{ url('users/create') }}" class="btn btn-success">Add User</a>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Role ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $serialNumber = 1;
                        @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $serialNumber++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td><img src="{{ asset($user->image) }}" alt="Profile" style="width: 60px; height:60px;"></td>
                                <td>{{ $user->role_id }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary mr-2">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 
  @endsection
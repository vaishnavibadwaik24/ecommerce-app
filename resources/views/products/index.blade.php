@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
                    <a href="{{ url('products/create') }}" class="btn btn-info">Add Product</a>
                </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $serialNumber = 1;
                        @endphp
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $serialNumber++ }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($product->description, 50, '...') !!}</td>
                                <td>{{ $product->category->name }}</td>
                                
                                <td>
                                    <img src="{{ asset('images/'.$product->photo) }}" alt="Profile" style="max-width: 60px; max-height: 60px;">
                                </td>
                                
                                          
                                <td>
                                  @if($product->status == 1)
                                  <span class="badge badge-success">Active</span>
                                  @else
                                  <span class="badge badge-danger">Inactive</span>
                                  @endif
                                </td>
                                <td>{{ $product->price }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary mr-2">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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
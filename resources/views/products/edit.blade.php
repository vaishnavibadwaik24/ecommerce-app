@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper" style="width: 160%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Edit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
              <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $product->title }}">
                    </div>

                    <label for="editor">Description</label>
                          <div id="editorWrapper" class="form-group">
                            <textarea class="form-control" id="editor" name="description">{{ $product->description }}</textarea>
                          </div>
                  
                          <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                          <div class="form-group"> 
                            <label for="photo">Old Photo</label>
                            <img src="{{ asset('images/'.$product->photo) }}" alt="Profile" style="max-width: 60px; max-height: 60px;">
                          </div>
                          <div class="form-group">
                            <label for="photo">New Photo</label>
                            <input class="form-control" type="file" id="photo" name="photo" value="{{ old('photo') }}">
                          </div>
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" type="text" id="price" name="price" value="{{ $product->price }}">
                          </div>
                          <div class="form-group">
                            <label for="status">Status</label><br>
                            <input type="radio" id="status_active" name="status" value="1" {{ $product->status == 1 ? 'checked' : '' }}>Active
                            <br>
                            <input type="radio" id="status_inactive" name="status" value="0" {{ $product->status == 0 ? 'checked' : '' }}>Inactive
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

    <script>
        ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
          } );
      </script>
    <!-- /.content -->
  </div>

@endsection
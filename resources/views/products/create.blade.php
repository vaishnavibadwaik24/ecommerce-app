@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
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
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                    </div>

                    <label for="editor">Description</label>
                          <div id="editorWrapper" class="form-group">
                            <textarea class="form-control" id="editor" name="description">{{ old('description') }}</textarea>
                          </div>
                  
                          <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id">
                              <option value="">Select Category</option>
                              @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="photo">Photo</label>
                            <input class="form-control" type="file" id="photo" name="photo" value="{{ old('photo') }}">
                          </div>
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" type="text" id="price" name="price" value="{{ old('price') }}">
                          </div>
                    <div class="form-group">
                      <label for="status">Status</label><br>
                      <input type="radio" id="status_active" name="status" value="1" {{ old('status') == 1 ? : '' }}>Active
                      <br>
                      <input type="radio" id="status_inactive" name="status" value="0" {{ old('status') == 0 ? : '' }}>Inactive
                    </div>
                </div>
                <!-- /.card-body -->
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
    <!-- /.content -->
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


@endsection

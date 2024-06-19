@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add SiteInfo</h1>
                </div>
                
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <form action="{{ route('siteinfo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <label for="editor">About Us</label>
                                <div id="editorWrapper" class="form-group">
                                    <textarea class="form-control" id="editor" name="about_us">{{ old('about_us') }}</textarea>
                                </div>
                                    <label for="editor">Terms & Conditions</label>
                                    <div id="editorWrapper" class="form-group">
                                    <textarea class="form-control" id="editor1" name="terms_condn" >{{ old('terms_condn') }}</textarea>
                                </div>
                                    <label for="editor">Privacy Policy</label>
                                    <div id="editorWrapper" class="form-group">
                                    <textarea class="form-control" id="editor2" name="privacy_policy" >{{ old('privacy_policy') }}</textarea>
                                </div>
                                    <label for="editor">Return policy</label>
                                    <div id="editorWrapper" class="form-group">
                                    <textarea class="form-control" id="editor3" name="return_policy" >{{ old('return_policy') }}</textarea>
                                </div>
                                    <label for="editor">Jobs</label>
                                    <div id="editorWrapper" class="form-group">
                                    <textarea class="form-control" id="editor4" name="jobs" >{{ old('jobs') }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script>
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
        console.error( error );
      } );
      ClassicEditor
      .create( document.querySelector( '#editor1' ) )
      .catch( error => {
        console.error( error );
      } );
      ClassicEditor
      .create( document.querySelector( '#editor2' ) )
      .catch( error => {
        console.error( error );
      } );
      ClassicEditor
      .create( document.querySelector( '#editor3' ) )
      .catch( error => {
        console.error( error );
      } );
      ClassicEditor
      .create( document.querySelector( '#editor4' ) )
      .catch( error => {
        console.error( error );
      } );
  </script>
@endsection

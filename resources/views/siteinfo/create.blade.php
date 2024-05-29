@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper" style="width: 160%">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SiteInfo Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">SiteInfo</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <form action="{{ route('siteinfo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="about_us">About Us</label>
                                    <textarea type="text" class="form-control" id="about_us" name="about_us" placeholder="Enter About Us" value="{{ old('about_us') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="terms_condn">Terms & Conditions</label>
                                    <textarea type="text" class="form-control" id="terms_condn" name="terms_condn" placeholder="Enter Terms & Conditions" value="{{ old('terms_condn') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="privacy_policy">Privacy Policy</label>
                                    <textarea type="text" class="form-control" id="privacy_policy" name="privacy_policy" placeholder="Enter Privacy Policy" value="{{ old('privacy_policy') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="return_policy">Return policy</label>
                                    <textarea type="text" class="form-control" id="return_policy" name="return_policy" placeholder="Enter Return Policy" value="{{ old('return_policy') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jobs">Jobs</label>
                                    <textarea type="text" class="form-control" id="jobs" name="jobs" placeholder="Enter Jobs" value="{{ old('jobs') }}"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SiteInfo</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <div class="ml-auto">
                                <a href="{{ route('siteinfo.create') }}" class="btn btn-info">Add SiteInfo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>About Us</th>
                                        <th>Terms & Conditions</th>
                                        <th>Privacy Policy</th>
                                        <th>Return policy</th>
                                        <th>Jobs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $serialNumber = 1;
                                    @endphp
                                    @foreach($siteinfo as $si)
                                    <tr>
                                        <td>{{ $serialNumber++ }}</td>
                                        <td>{{ $si->about_us }}</td>
                                        <td>{{ $si->terms_condn }}</td>
                                        <td>{{ $si->privacy_policy }}</td>
                                        <td>{{ $si->return_policy }}</td>
                                        <td>{{ $si->jobs}}</td>
                                        
                                        {{-- <td class="d-flex">
                                            <form action="{{ route('siteinfo.destroy', $si->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>    
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

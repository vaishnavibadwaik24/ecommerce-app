@extends('layouts.master')
@section('content')

<div id="app" class="mt-4">
    <main class="py-4">
        <div class="container mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif

                    @if($message = Session::get())
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif

                    <div class=" mt-4 pt-4">
                        {{-- <div class="card-header">Payment</div> --}}
                        <div class="card-body d-flex justify-content-center align-items-center mt-4">
                            <form action="{{ route('razorpay.payment.store') }}" method="POST">
                                @csrf
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="rzp_test_evEOCCEcbjwPij"
                                        data-amount="{{ Cart::subtotal() * 100 }}"
                                        data-buttontext="Pay {{ Cart::subtotal() }} INR"
                                        data-name="FastFruits.com"
                                        data-description="Razorpay"
                                        data-image="https://www.fastfruits.com/frontTheme/images/logo.png"
                                        data-prefill.name="name"
                                        data-prefill.email="email"
                                        data-theme.color="#ff7529">
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection

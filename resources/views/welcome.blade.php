@extends('layouts.app')
@section('content')


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">100% Organic Foods</h4>
                        <h1 class="mb-5 display-3 text-primary">Organic Veggies & Fruits Foods</h1>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Submit Now</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        
                                        @foreach($banners as $key => $banner)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} rounded">
                                                <img src="{{ asset('images/'.$banner->photo) }}" class="img-fluid w-100 h-100 bg-secondary rounded" alt="{{ $banner->title }}">
                                                <a href="#" class="btn px-4 py-2 text-white rounded">{{ $banner->title }}</a>
                                            </div>
                                        @endforeach


                                
                                    </div>
                                </div>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Free Shipping</h5>
                                <p class="mb-0">Free on order over $300</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Security Payment</h5>
                                <p class="mb-0">100% security payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>30 Day Return</h5>
                                <p class="mb-0">30 day money guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>24/7 Support</h5>
                                <p class="mb-0">Support every time fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Our Organic Products</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 130px;">All Products</span>
                                    </a>
                                </li>

                                @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2{{$category->id}}">
                                        <span class="text-dark" style="width: 130px;">{{$category->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($products as $product)
                                    @if ($product->status == 1)
                                        
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <a href="{{ url('shopdetails', $product->id) }}">
                                                <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid w-100 rounded-top" alt="" style="width: 500; height:350;">
                                                </a>
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{$product->category->name}}</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $product->title }}</h4>
                                                <p>{!! \Illuminate\Support\Str::limit($product->description, 120, '...') !!}</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">{{ number_format((float) $product->price, 2, '.', '') }}₹</p>
                                                    <form action="{{ route('cart.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="title" value="{{ $product->title }}">
                                                        <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach
                                </div>  
                            </div>
                        </div>
                    </div>
                    @foreach($categories as $category)
                    <div id="tab-2{{$category->id}}" class="tab-pane fade">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    @foreach($products->where('category_id', $category->id) as $product)
                                    @if ($product->status == 1)

                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <a href="{{ url('shopdetails', $product->id) }}">
                                                <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid w-100 rounded-top" alt="" style="width: 500; height:350;">
                                                </a>
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">{{$product->category->name}}</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $product->title }}</h4>
                                                <p>{!! \Illuminate\Support\Str::limit($product->description, 120, '...') !!}</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">{{ number_format((float) $product->price, 2, '.', '') }}₹</p>
                                                   
                                                    <form action="{{ route('cart.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="title" value="{{ $product->title }}">
                                                        <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                                                    </form>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->


        <!-- Featurs Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border border-secondary">
                                <img src="{{ asset('welcome/img/featur-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-white">Fresh Apples</h5>
                                        <h3 class="mb-0">20% OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-dark rounded border border-dark">
                                <img src="{{ asset('welcome/img/featur-2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-light text-center p-4 rounded">
                                        <h5 class="text-primary">Tasty Fruits</h5>
                                        <h3 class="mb-0">Free delivery</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-primary rounded border border-primary">
                                <img src="{{ asset('welcome/img/featur-3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-secondary text-center p-4 rounded">
                                        <h5 class="text-white">Exotic Vegetable</h5>
                                        <h3 class="mb-0">Discount 30₹</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->

        <!-- Vegetable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0">Fresh Organic Vegetables</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach($products as $product)
                @if($product->category->name == 'Vegetables')
                @if ($product->status == 1)

                    <div class="border border-primary rounded position-relative vegetable-item">
                        <div class="vegetable-img">
                            <a href="{{ url('shopdetails', $product->id) }}">
                            <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid w-100 rounded-top" alt="">
                            </a>
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">{{ $product->category->name }}</div>
                        <div class="p-4 rounded-bottom">
                            <h4>{{ $product->title }}</h4>
                            <p>{!! \Illuminate\Support\Str::limit($product->description, 120, '...') !!}</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">{{ number_format((float) $product->price, 2, '.', '') }}₹</p>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="title" value="{{ $product->title }}">
                                    <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif

                @endforeach
            </div>
        </div>
    </div>
    <!-- Vegetable Shop End -->


        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">Fresh Exotic Fruits</h1>
                            <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                            <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('welcome/img/baner-1.png') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">50₹</span>
                                    <span class="h4 text-muted mb-0">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
                <div class="row g-4">
                    @foreach($products as $product)
                    @if ($product->status == 1)
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('shopdetails', $product->id) }}" class="h5">Organic {{ $product->title }}</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">{{ number_format((float) $product->price, 2, '.', '') }}₹</h4>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="title" value="{{ $product->title }}">
                                        <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                    @foreach($products as $product)
                    @if ($product->status == 1)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="{{ url('shopdetails', $product->id) }}" class="h5">Organic {{ $product->title }}</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">{{ number_format((float) $product->price, 2, '.', '') }}₹</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">We have really been enjoying your fruit. The quality has been amazing!
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{ asset('welcome/img/testimonial-3.jpg') }}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Smith Doe</h4>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">The fruit is AMAZING! Best quality I have ever seen…it rivals my local Sunday farmers market.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{ asset('welcome/img/testimonial-1.jpg') }}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Annie Sharma</h4>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Veggies and fruits are just awesome. Now no need to go out in search of organic vegetables and fruits.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{ asset('welcome/img/testimonial-2.jpg') }}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Ivan Menon</h4>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->
@endsection
        
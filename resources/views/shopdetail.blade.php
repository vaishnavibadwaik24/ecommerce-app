@extends('layouts.master')
@section( 'content' )

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Product Detail</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Product Detail</li>
    </ol>
</div>
<!-- Single Page Header End -->

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

<!-- Single Product Start -->
<div class="container-fluid py-5 mt-0">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="border rounded">
                            
                                <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid w-100 rounded-top" alt="">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3">{{ $product->title }}</h4>
                        <p class="mb-3">Category: {{ $product->category->name }}</p>
                        <h5 class="fw-bold mb-3">{{ number_format((float) $product->price, 2, '.', '') }}₹</h5>
                        <div class="d-flex mb-4">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="mb-4">{!! $product->description !!}</p>
                        {{-- <p class="mb-4">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p> --}}
                        <div class="input-group quantity mb-5" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="title" value="{{ $product->title }}">
                            <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                        <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true">Description</button>
                                <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                    id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                    aria-controls="nav-mission" aria-selected="false">Reviews</button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p>At FastFruits, we are passionate about offering a wide variety of high-quality fruits that are not only delicious but also packed with essential nutrients to keep you healthy and energized. </p>
                                <p>Explore our extensive selection of fruits, ranging from juicy apples and succulent oranges to exotic tropical delights like mangoes and pineapples. Whether you're looking for a quick snack, ingredients for your favorite recipes, or a gift basket for a special occasion, FastFruits has you covered.</p>
                                <div class="px-2">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Weight</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">1 kg</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Country of Origin</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">Agro Farm</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Quality</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">Organic</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Сheck</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">Healthy</p>
                                                </div>
                                            </div>
                                            <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">Min Weight</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">250 Kg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                @foreach ($reviews as $review)

                                    <div class="d-flex">
                                    
                                    <div class="">
                                        {{-- <p class="mb-2" style="font-size: 14px;">April 12, 2024</p> --}}
                                        <div class="d-flex justify-content-between">
                                            <h5>{{ $review->name }}</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p> {{ $review->review }} </p>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Sam Peters</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic 
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="tab-pane" id="nav-vision" role="tabpanel">
                                <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. 3</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                    
                    <form action="{{ route('shopdetails.store') }}"  method="POST">
                        @csrf
                        <h4 class="mb-5 fw-bold">Leave a Reply</h4>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="text" name="name" class="form-control border-0 me-4" placeholder="Your Name *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="email" name="email" class="form-control border-0" placeholder="Your Email *">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-bottom rounded my-4">
                                    <textarea name="review" class="form-control border-0" cols="30" rows="8" placeholder="Your Review *" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between py-3 mb-5">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-3">Please rate:</p>
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-star unchecked" data-value="1"></i>
                                                <i class="fa fa-star unchecked" data-value="2"></i>
                                                <i class="fa fa-star unchecked" data-value="3"></i>
                                                <i class="fa fa-star unchecked" data-value="4"></i>
                                                <i class="fa fa-star unchecked" data-value="5"></i>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn border border-secondary text-primary rounded-pill px-4 py-3">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-xl-3">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                        {{-- <div class="input-group w-100 mx-auto d-flex mb-4">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div> --}}
                        <div class="mb-4">
                            <h4>Categories</h4>
                            <ul class="list-unstyled fruite-categorie">
                                @foreach ($categories as $category)
                                    
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="#"><i class="fas fa-apple-alt me-2"></i>{{ $category->name }}</a>
                                        {{-- <span>(3)</span> --}}
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                     <div class="col-lg-12">
                                <h4 class="mb-3">Featured products</h4>
                                @foreach($bestsellers as $bestseller)
                                @if ($bestseller->status == 1)
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="{{ asset('images/'.$bestseller->photo) }}" class="img-fluid rounded-circle" alt="Image">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">{{ $bestseller->title }}</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">{{ number_format((float) $bestseller->price, 2, '.', '') }} ₹</h5>
                                            <h5 class="text-danger text-decoration-line-through">5.00 ₹</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                        @endif
                        @endforeach
                        <div class="d-flex justify-content-center my-4">
                            <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="position-relative">
                            <img src="{{ asset('welcome/img/banner-fruits.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        <div class="container-fluid vesitable">
            <h1 class="mb-0">Related Products</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                @foreach($products as $product)
                @if ($product->status == 1)
        
                <div class="border border-primary rounded position-relative vegetable-item">
                    <div class="vegetable-img">
                            <img src="{{ asset('images/'.$product->photo) }}" class="w-100 rounded-top" alt="Image" style="width: 300px; height: 180px;">
                    </div>
                    <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">{{ $product->category->name }}</div>
                    <div class="p-4 rounded-bottom">
                        <h4>{{ $product->title }}</h4>
                        <p>{!! \Illuminate\Support\Str::limit($product->description, 90, '...') !!}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-dark fs-5 fw-bold mb-0">{{ number_format((float) $product->price, 2, '.', '') }}₹</p>
                            <form action="{{ route('cart.store') }}" method="POST" class="d-inline-block">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="title" value="{{ $product->title }}">
                                <input type="hidden" name="price" value="{{ number_format((float) $product->price, 2, '.', '') }}₹">
                                <button type="submit" class="btn border border-secondary rounded-pill text-primary">
                                    <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
        
                @endif
                @endforeach
            </div>
        </div>
        
        {{--End Related Products --}}

    </div>
</div>
<!-- Single Product End -->

@endsection
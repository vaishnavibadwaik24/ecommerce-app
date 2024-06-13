@extends('layouts.master')
@section('content')

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Shop</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Fresh fruits shop</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="Search" aria-describedby="search-icon-1" id="searchInput">
                            {{-- <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span> --}}
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="fruits">Default Sorting:</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3"
                                form="fruitform">
                                <option value="nothing">Nothing</option>
                                <option value="popularity">Popularity</option>
                                <option value="organic">Organic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
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
                                <div class="mb-3">
                                    <h4 class="mb-2">Price</h4>
                                    <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput"
                                        min="0" max="100" value="0" oninput="amount.value=rangeInput.value">
                                    <output id="amount" name="amount" min-velue="0" max-value="100"
                                        for="rangeInput">0</output>
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
                                    <a href="#"
                                        class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">View
                                        More</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="{{ asset('welcome/img/banner-fruits.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute"
                                        style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9" id="itemContainer">
                        <div class="row g-4 justify-content-center" id="productList">
                            {{-- @foreach ($products as $product)
                            @if ($product->status == 1)
                            
                            <div class="col-md-6 col-lg-6 col-xl-4">
                                <div class="rounded position-relative fruite-item">

                                    <div class="fruite-img">
                                        <a href="{{ url('shopdetails', $product->id) }}">
                                        <img src="{{ asset('images/'.$product->photo) }}" class="img-fluid w-100 rounded-top" alt="">
                                        </a>
                                    </div>
                                    
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">{{ $product->category->name }}</div>
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
                            @endforeach --}}
                    
                            {{-- <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function() {

function fetchAndRenderProducts() {
    var searchQuery = $('#searchInput').val();
    var priceRange = $('#rangeInput').val();

    $.ajax({
        url: '/api/products', 
        method: 'GET',
        dataType: 'json',
        data: {
            search: searchQuery,
            price_range: priceRange
        },
        success: function(response) {
            renderProducts(response.products);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

function renderProducts(products) {
    var productList = $('#productList');
    productList.empty();

    if (products.length > 0) {
        products.forEach(function(product) {
            var productHtml = `
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                            <a href="/shopdetails/${product.id}">
                                <img src="/images/${product.photo}" class="w-100 rounded-top" style="width: 300px; height: 180px;" alt="Image">
                            </a>
                        </div>
                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">${product.category.name}</div>
                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                            <h4>${product.title}</h4>
                            <p>${product.description.substring(0, 90)}${product.description.length > 90 ? '...' : ''}</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">${parseFloat(product.price).toFixed(2)}₹</p>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="${product.id}">
                                    <input type="hidden" name="title" value="${product.title}">
                                    <input type="hidden" name="price" value="${parseFloat(product.price).toFixed(2)}₹">
                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            productList.append(productHtml);
        });
    } else {
        productList.html('<p>No products found.</p>');
    }
}

function updatePriceRange() {
    var rangeValue = $('#rangeInput').val();
    $('#amount').text(rangeValue);
    fetchAndRenderProducts();
}

$('#searchInput').on('input', function(event) {
    event.preventDefault();
    fetchAndRenderProducts();
});

$('#rangeInput').on('input', function(event) {
    event.preventDefault();
    updatePriceRange();
});

fetchAndRenderProducts();
});
</script>
@endsection

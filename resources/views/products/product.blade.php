@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Product Detail</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product
                                Detail</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('assets/images/menu-2.jpg') }}" class="image-popup"><img
                            src="{{ asset('assets/images/menu-2.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3 style="color:#ccc8c8d2 !important">{{ $product->name }}</h3>
                    <p class="price"><span>{{ $product->price }}</span></p>
                    <p class="pb-3">{{ $product->description }}</p>
                    {{-- <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="icon-minus"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div> --}}
                    <p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4" style="color:#ccc8c8d2 !important">Related products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($related_products as $product)
                    <div class="col-md-3">
                        <div class="card h-100 bg-transparent border border-2 rounded menu-entry">
                            <div class="card-body d-flex flex-column justify-content-between">

                                <a href="{{ route('product.view', $product->id) }}" class="img"
                                    style="background-image: url({{ asset('assets/images/' . $product->image) }});"></a>
                                <div class="text-center pt-2">
                                    <h3 class="card-title"><a class="link-light text-decoration-none"
                                            href="{{ route('product.view', $product->id) }}">{{ $product->name }}</a></h3>
                                    {{-- <p class="card-text">{{ substr($product->description, 0, 70) }}</p> --}}

                                    <p class="mt-3"><a href="{{ route('product.view', $product->id) }}"
                                            class="btn btn-primary btn-outline-primary">View</a></p>
                                </div>
                                <p class="position-absolute p-2 fw-bold"
                                    style="background-color: rgba(255, 0, 0, 0.8); color:white !important">
                                    ${{ $product->price }}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

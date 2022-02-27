@extends('layouts.app')
@section('page_id', 'home')
@section('content')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <h1>Olive Power</h1>
                        <p class="hero-text">The Most Powerful
                            Antioxidant in the World.</p>
                        <p class="hero-text">
                            <strong>Wild Olive Leaf Extract!</strong> <br>
                            18,000 times more antioxidants than in the extra virgin olive oil.
                        </p>
                        <a href="/" class="buy btn btn-custom">
                            Buy Now <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/olive_home.png" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
            <h2 class="text-center">Welcome to the Olive Power</h2>
            <p class="lead">This template is great for single product shops. It comes with <strong>3 html pages</strong>,
                <strong>6 colour variants</strong> and <strong>SASS files</strong> to take the visual configuration even
                further. All fully-responsive and
                based on latest Bootstrap 4.0.0.
            </p>
        </div>
    </section>

    <section class="features white-background">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 info">
                    <h2 class="heading">Olive Power Kati</h2>
                    <h3>More than just an oil</h3>
                    <p class="lead">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable.
                        If you are going to use a passage of Lorem Ipsum.
                    </p>
                    <a href="/" class="buy btn btn-custom">
                        Buy Now <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="col-lg-6 items">
                    <div class="row">
                        <div class="col-md-6 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <h4>Unique</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <h4>Perfect</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <h4>Original Quality</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <h4>Competitive Prices</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center"><a href="#" class="read-more btn btn-primary d-lg-none">Read More</a>
                </div>
            </div>
        </div>
    </section>


    {{ Config::get('app.locale') }}
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12 product">
                    <img src="/images/product-transparentx1.png" alt="t-shirt"
                         class="img-fluid">
                    <p class="product-name mb-2"> 1 Bottle OlivePower </p>
                    <p class="product-decription mb-0">Wild Olive Leaf Extract</p>
                    <p class="product-decription mb-0">Enough for one month!</p>
                    <p class="product-decription">20 Drops per Day</p>
                    <div class="price">
                        <span class="font-weight-bold">£30</span>
                    </div>
                    <a href="/" class="mt-3 buy btn btn-lg btn-custom">
                        Buy Now <i class="fas fa-shopping-cart"></i>
                    </a>
                    <p class="small pt-1 font-weight-bold">FREE Delivery</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 product">
                    <img src="/images/product-transparentx2.png" alt="t-shirt"
                         class="img-fluid">
                    <p class="product-name mb-2"> 2 Bottles OlivePower </p>
                    <p class="product-decription mb-0">Wild Olive Leaf Extract</p>
                    <p class="product-decription mb-0">Quantity for two month!</p>
                    <div class="price">
                        <span class="font-weight-bold">£50</span>
                    </div>
                    <a href="/" class="mt-3 buy btn btn-lg btn-custom">
                        Buy Now <i class="fas fa-shopping-cart"></i>
                    </a>
                    <p class="small pt-1 font-weight-bold">FREE Delivery</p>
                </div>
            </div>
        </div>
    </section>

@endsection

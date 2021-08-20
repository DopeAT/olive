@extends('layouts.app')
@section('page_id', 'home')
@section('content')

    <style>
        .features {
            background: #fafafa;
        }

        section.features .feature:first-of-type, section.features .feature:nth-of-type(3) {
            border-right: 1px solid #eee;
        }

        section.features .feature:first-of-type, section.features .feature:nth-of-type(2) {
            border-bottom: 1px solid #eee;
            padding-top: 0;
        }

        section.features .feature {
            text-align: center;
            padding: 15px;
        }

        section.features .feature .icon i {
            font-size: 50px;
        }

        i[class*='icon'] {
            -webkit-transform: translateY(2px);
            transform: translateY(2px);
        }
    </style>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <h1>Olive Oil</h1>
                        <p class="hero-text">The Most Powerful
                            Antioxidant in the World.</p>
                        <p class="hero-text"><strong>Wild Olive Leaf Extract!</strong> <br> 18,000 times more antioxidants than
                            in the extra virgin olive oil. </p><a href=".big-product" class="buy btn btn-primary">Buy Now <i class="icon-shopping-bag"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info">
                    <h2 class="heading-left">Our Products' <br>Specialities</h2>
                    <h3>More than just a look</h3>
                    <p class="lead">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable.
                        If you are going to use a passage of Lorem Ipsum.
                    </p><a href="#" class="read-more btn btn-primary d-none d-lg-inline-block">Read More</a>
                </div>
                <div class="col-lg-6 items">
                    <div class="row">
                        <div class="col-md-6 feature">
                            <div class="icon"><i class="icon-shirt-and-tie"></i></div>
                            <div class="text">
                                <h4>Unique Design</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon"><i class="icon-shirt"></i></div>
                            <div class="text">
                                <h4>Perfect fit clothes</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon"><i class="icon-badge"></i></div>
                            <div class="text">
                                <h4>Original Quality</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                        <div class="col-md-6 feature">
                            <div class="icon"><i class="icon-price-tag"></i></div>
                            <div class="text">
                                <h4>Competitive Prices</h4>
                                <p>Suspendisse posuere, diam in bibendum posuere, diam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center"><a href="#" class="read-more btn btn-primary d-lg-none">Read More</a></div>
            </div>
        </div>
    </section>

@endsection

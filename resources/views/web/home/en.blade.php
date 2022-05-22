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
                        <p class="hero-text">The Most Powerful Antioxidant in the World!</p>
                        <p class="hero-text">
                            <strong>Wild Olive Leaf Extract!</strong> <br>
                            18,000 times more antioxidants than
                            in the extra virgin olive oil.
                        </p>
                        <a href="{{ route('order') }}?order=1" class="buy btn btn-custom">
                            Add to basket <i class="fas fa-shopping-cart"></i>
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
            <h2 class="text-center welcome-text">Welcome at Olive Power</h2>
            <p>
                OLIVE POWER is a unique Wild Olive
                Leaf Extract with the highest content of
                polyphenols, fully absorbable from the
                body.
            </p>
            <p>
                The most powerful natural antioxidant
                in the world, which balances vital
                functions, neutralizes the action of free
                radicals in the body and contains
                nutrients for human health.
            </p>

            <div class="row pros-row">
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Wild Trees</h4>
                        <p class="text-muted">
                            Exclusive use of leaves from wild olive
                            trees – pure and rich in polyphenols!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Only Fresh Leaves</h4>
                        <p class="text-muted">
                            Exclusive use of fresh leaves, which
                            have not undergone any other
                            processing - they maintain all their
                            nutrients.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Leaves are collected in Spring.</h4>
                        <p class="text-muted">
                            The leaves for Olive Power are only
                            collected in the Spring – when based
                            on our experience they contain the
                            highest possible amount of
                            polyphenols!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Water Extract,
                            Alcohol and Chemicals free</h4>
                        <p class="text-muted">
                            Eco friendly technology, no use of any
                            alcohols or chemicals in the production
                            process of Olive Power!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Unique Technology and Know-How</h4>
                        <p class="text-muted">
                            Advanced Technology developed in the
                            last 10 years - a guarantee for the
                            unique qualities of Olive Power!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>The Experience of Four Generations</h4>
                        <p class="text-muted">
                            The experience of four generations in
                            olives cultivation and processing - Olive
                            Power – Our best accomplishment till
                            present!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="features white-background">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 items">
                    <div class="row">
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Sustains the cardiovascular system</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Reduces cholesterol levels</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Antimicrobial and antiviral action</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Controls blood sugar</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Stimulates the immune system</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Anti-inflammatory action</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Controls blood pressure</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Anticancer action</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.products', ['locale' => 'en'])

@endsection

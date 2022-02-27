@extends('layouts.app')
@section('page_id', 'about')
@section('content')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content">
                        <h1>{{ __('About') }} Olive Power</h1>
                        <p class="hero-text">The Most Powerful Antioxidant in the World!</p>
                        <p class="hero-text">
                            <strong>Wild Olive Leaf Extract!</strong> <br>
                            18,000 times more antioxidants than
                            in the extra virgin olive oil.
                        </p>
                        <a href="{{ route('order') }}?order=1&amount=1" class="buy btn btn-custom">
                            Add to basket <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
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

    <section class="intro-text-section">
        <div class="container text-center">
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
                <div class="col-md-12">
                    Natural Wild Olive Leaf extract.
                    Natural Health Drops with active care
                    from Sunny Greece!

                    OLIVE POWER- an Extract from the
                    Leaves of Wild Olive Trees. 100%
                    Natural product for more vital power
                    and health recovery, created with
                    innovative technology, with no
                    artificial ingredients.
                    OLIVE POWER is a unique Wild Olive
                    Leaf Extract with the highest content of
                    polyphenols, fully absorbable from the
                    body.
                    The most powerful natural antioxidant
                    in the world, which balances vital
                    functions, neutralizes the action of free
                    radicals in the body and contains
                    nutrients for human health.
                </div>
            </div>
        </div>
    </section>

    <header class="overlay" style="height: auto">
        <div class="position-relative">
            <div class="container px-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="page-header-title mb-3">
                            <strong>The Benefits:</strong>
                        </h3>
                        <p class="page-header-text text-white mb-0">Recent Medical research and
                            laboratory studies, as well as the work
                            of many scientists around the world,
                            have proved the connection between
                            olive leaf extract and the many
                            benefits to human health:</p>
                        <hr class="white-hr">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">1</span>
                                </h4>
                                <p>The Most Powerful Natural
                                    Antioxidant in the World</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">2</span>
                                </h4>
                                <p>Reduces the LDL Cholesterol and
                                    Triglycerides Levels, Significantly
                                    reducing the risk of Atherosclerosis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">3</span>
                                </h4>
                                <p>Helps protect and maintain a
                                    Healthy Cardio- Vascular System</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">4</span>
                                </h4>
                                <p>Anti- Cancer Action</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">5</span>
                                </h4>
                                <p>Antimicrobal Action</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">6</span>
                                </h4>
                                <p>Reinforces the Nervous System in
                                    conditions related to High Sress Levels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">7</span>
                                </h4>
                                <p>Eliminates the risk of Fungal
                                    Infections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">8</span>
                                </h4>
                                <p>Anti-aging action and support of the
                                    Natural Health</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">9</span>
                                </h4>
                                <p>Regulates Blood Pressure levels and
                                    prevents Hypertension</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">10</span>
                                </h4>
                                <p>Regulates Blood Sugar levels and
                                    shows Anti- Diabetic action</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">11</span>
                                </h4>
                                <p>Boosts the immune system</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">12</span>
                                </h4>
                                <p>Enhances the Anti- Inflammatory
                                    powers of the human body</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">13</span>
                                </h4>
                                <p>Mechanisms of Cell Regeneration
                                    and Wound healing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">14</span>
                                </h4>
                                <p>Protects the mucous membrane of
                                    the Gastrointestinal tract</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">15</span>
                                </h4>
                                <p>Repressive action in cases of Gout</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">16</span>
                                </h4>
                                <p>Slows down the development of
                                    Alzheimer&#39;s and Parkinson&#39;s Disease</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>

    @include('components.products', ['locale' => 'en'])

@endsection

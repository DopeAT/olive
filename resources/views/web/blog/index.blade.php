@extends('layouts.app')
@section('page_id', 'blogIndex')
@section('content')

    <header class="overlay">
        <div class="position-relative">
            <div class="container px-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="page-header-title mb-3">{{ __('Useful Articles') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>

    <section class="py-5 my-5 posts">
        <div class="container px-5">

            <div class="row gx-5">
                @foreach($posts as $post)
                    <div class="col-md-6 col-xl-6 mb-5">
                        <a class="card post-preview lift h-100" href="{{ route('blog.show', $post->slug) }}">
{{--                            <img class="card-img-top" src="https://source.unsplash.com/KE0nC8-58MQ/660x360" alt="...">--}}
                            <img class="card-img-top" src="/images/posts/{{ $post->image }}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr>

    @include('components.products', ['locale' => Config::get('app.locale')])

@endsection

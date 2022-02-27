@extends('layouts.app')
@section('page_id', 'post')
@section('content')

    <div class="container">
        <div class="row mt-5 pt-5 theme-background">
            <h1>{{ $post->title }}</h1>
        </div>

        <div class="row my-1 py-1">
            <p>{{ $post->description }}</p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                {!! $post->body !!}
            </div>
        </div>
    </div>

@endsection

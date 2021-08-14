@extends('layouts.app')
@section('page_id', 'blogIndex')
@section('content')

    @foreach($posts as $post)
        <div class="mt-5">
            <h1>
                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h1>
        </div>
    @endforeach

@endsection

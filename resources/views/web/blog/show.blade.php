@extends('layouts.app')
@section('page_id', 'post')
@section('content')

   <div class="mt-5 pt-5">
       {{ $post->slug }}
   </div>

@endsection

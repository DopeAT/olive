@extends('admin.layouts.app')
@section('title', 'Pages Admin Dashboard | Olive')
@section('heading', 'Pages - Dashboard')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12 bg-white py-2">

            <h5 class="font-weight-bold">Add New Post</h5>
            <hr>

            @include('layouts.messages')

            <form method="POST" action="{{ route('admin.posts.store') }}" class="pt-3" enctype="multipart/form-data">
                @csrf

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach($langs as $lang)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $langs[0] === $lang ? 'active' : null }}" id="{{$lang}}-tab"
                               data-toggle="tab" href="#{{$lang}}" role="tab" aria-controls="{{$lang}}"
                               aria-selected="true">
                                <img src="/images/flags/{{$lang}}.svg" width="25"/>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    @foreach($langs as $lang)
                        <div class="tab-pane fade {{ $langs[0] === $lang ? 'show active' : null }}" id="{{$lang}}"
                             role="tabpanel" aria-labelledby="{{$lang}}-tab">

                            <div class="form-group row">
                                <label for="{{$lang}}[title]" class="col-md-2 col-form-label text-md-right">Title</label>

                                <div class="col-md-8">
                                    <input id="title" type="text" class="form-control" name="{{$lang}}[title]"
                                           value="{{ old('title') }}"
                                           required autofocus
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="{{$lang}}[description]" class="col-md-2 col-form-label text-md-right">Description</label>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm" name="{{$lang}}[description]" id="description" cols="30"
                                              rows="5" placeholder="Post Description"
                                    >{!! old('description') !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="body" class="col-md-2 col-form-label text-md-right">Body</label>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm mytextarea" name="{{$lang}}[body]" id="body" cols="30"
                                              rows="50" placeholder="Post Content"
                                    >{!! old('body') !!}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Post Image</label>

                    <div class="col-md-8">
                        <input id="image" type="file" name="image" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-2">
                        <button type="submit" class="btn btn-success">
                            Create
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection

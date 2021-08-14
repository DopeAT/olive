@extends('admin.layouts.app')
@section('title', 'Posts Admin Dashboard | Olive')
@section('heading', 'Posts - Dashboard')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12 bg-white py-2">

            <h5 class="font-weight-bold">Edit {{ $data->title }}</h5>
            <hr>

            @include('layouts.messages')

            <form method="POST" action="{{ route('admin.posts.update', $data->id) }}" class="pt-3" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach($data->translations as $lang)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $lang->locale === 'el' ? 'active' : null }}" id="{{$lang->locale}}-tab"
                               data-toggle="tab" href="#{{$lang->locale}}" role="tab" aria-controls="{{$lang->locale}}"
                               aria-selected="true">
                                <img src="/images/flags/{{$lang->locale}}.svg" width="25"/>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    @foreach($data->translations as $lang)
                        <div class="tab-pane fade {{ $lang->locale === 'el' ? 'show active' : null }}" id="{{$lang->locale}}"
                             role="tabpanel" aria-labelledby="{{$lang->locale}}-tab">

                            <div class="form-group row">
                                <label for="{{$lang->locale}}[title]" class="col-md-2 col-form-label text-md-right">Title</label>

                                <div class="col-md-8">
                                    <input id="title" type="text" class="form-control" name="{{$lang->locale}}[title]"
                                           value="{{ $lang->title }}"
                                           required autofocus
                                    >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="{{$lang->locale}}[description]" class="col-md-2 col-form-label text-md-right">Description</label>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm" name="{{$lang->locale}}[description]" id="description" cols="30"
                                              rows="5" placeholder="Post Description"
                                    >{!! $lang->description !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="body" class="col-md-2 col-form-label text-md-right">Body</label>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm mytextarea" name="{{$lang->locale}}[body]" id="body" cols="30"
                                              rows="50" placeholder="Post Content"
                                    >{!! $lang->body !!}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Post Image</label>

                    <div class="col-md-8">
                        <input id="image" type="file" name="image" />
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection

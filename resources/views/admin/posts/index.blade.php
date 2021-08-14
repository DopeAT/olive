@extends('admin.layouts.app')
@section('title', 'Posts Admin Dashboard | Olive')
@section('heading', 'Posts - Dashboard')

@section('content')

    <div class="row">
        <div class="col-sm-12 mb-2">
            @include('layouts.messages')
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-12 mb-2">
            <div class="bg-white p-3 d-flex justify-content-between">
                <span class="font-weight-bold">
                    Posts
                </span>

                <a href="{{ route('admin.posts.create') }}" class="btn-sm btn btn-success"><i class="fas fa-plus"></i> Add New Post</a>
            </div>
        </div>

        <div class="col-sm-12">

            <div class="table-responsive bg-white p-3">

                <table id="datatable" class="table w-100">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created</th>
                        <th><i class="fas fa-cog"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <td class="font-weight-bold">{{ $post->id }}</td>
                            <td class="font-weight-bold text-primary">
                                {{ $post->title }}
                            </td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->created_at->format('d M Y') }}</td>
                            <td class="d-flex">
                                <a title="Edit" href="{{ route('admin.posts.edit', $post->id) }}" class="fas fa-pen text-primary mr-3"></a>
                                <a title="Show" href="/blog/{{ $post->slug }}" class="fas fa-eye text-primary mr-3" target="_blank"></a>
                                <a title="Delete" href="#" data-toggle="modal" data-target="#delete{{ $post->id }}" class="fas fa-trash-alt text-danger"></a>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="delete{{ $post->id }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this post?</p>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </table>

            </div>

        </div>

    </div>

@endsection

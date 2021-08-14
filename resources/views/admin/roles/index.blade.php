@extends('admin.layouts.app')
@section('title', 'Roles Admin Dashboard | EduConsultOrg')
@section('heading', 'Roles - Dashboard')

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
                    Roles
                </span>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="table-responsive bg-white p-3">
                <table id="datatable" class="table w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Users</th>
                            <th class="text-right"><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)

                            <tr>
                                <td class="font-weight-bold">{{ $role->id }}</td>
                                <td class="font-weight-bold text-primary">{{ $role->name }}</td>
                                <td>{{ $role->users->count() }}</td>
                                <td></td>
                            </tr>

                        @endforeach
                    </table>
            </div>
        </div>

    </div>

@endsection

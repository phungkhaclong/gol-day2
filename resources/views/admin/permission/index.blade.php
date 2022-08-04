@extends('admin.layouts.admin.master')
@section('main')

    <div class="col-md-9 main_right">
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>List Permission</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.permission.create') }}">add permision</a>
                        </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">Id</th>
                    <th style="width: 20%;"scope="col">Name</th>
                    <th style="width: 20%;"scope="col">key</th>
                    <th style="width: 30%;"scope="col">Permission_Group_id</th>
                    <th style="width: 20%;" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($permission))
                    @foreach ($permission as $per)
                        <tr>
                            <td>{{ $per->id }}</td>
                            <td>{{ $per->name }}</td>
                            <td>{{ $per->key }}</td>
                            <td>{{ $per->permission_group_id }}</td>
                            <td>
                                <a href="{{ route('admin.permission.edit', $per->id) }}" class="btn btn-primary">
                                    Edit </a>
                                <form class="d-inline" method="post"
                                    action="{{ route('admin.permission.destroy', $per->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tr>
            </tbody>
        </table>
        {{ $permission->links() }}
    </div>
@stop()

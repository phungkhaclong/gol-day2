@extends('admin.layouts.admin.master')
@section('main')

    <div class="col-md-9 main_right">
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>List Permission-group</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.permission-group.create') }}">add
                                permision</a> </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">User</th>
                    <th style="width: 30%;" scope="col">Id</th>
                    <th style="width: 30%;"scope="col">Name</th>
                    <th style="width: 20%;" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($permissionGroups))
                    @foreach ($permissionGroups as $permissionGroup)
                        <tr>
                            <th><i class="fa fa-user" aria-hidden="true"></i></th>
                            <td>{{ $permissionGroup->id }}</td>
                            <td>{{ $permissionGroup->name }}</td>
                            <td>
                                <a href="{{ route('admin.permission-group.edit', $permissionGroup->id) }}"
                                    class="btn btn-primary"> Edit </a>
                                <form class="d-inline" method="post"
                                    action="{{ route('admin.permission-group.destroy', $permissionGroup->id) }}">
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
        {{ $permissionGroups->links() }}
    </div>
@stop()

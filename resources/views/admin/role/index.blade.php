@extends('admin.layouts.admin.master')
@section('main')

    <div class="col-md-9 main_right">
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>List Role</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.role.create') }}">add role</a> </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">User</th>
                    <th style="width: 10%;" scope="col">ID</th>
                    <th style="width: 30%;" scope="col">Name</th>
                    <th style="width: 20%;" scope="col">Permission Count</th>
                    <th style="width: 20%;" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($roles))
                    @foreach ($roles as $role)
                        <tr>
                            <th><i class="fa fa-user" aria-hidden="true"></i></th>
                            <td> {{ $role->id }}</td>
                            <td> {{ $role->name }}</td>
                            <td>    {{ $role->permissions->count() }}</td>
                            <td>
                                <a href="{{ route('admin.role.show', $role->id) }}" class="btn btn-success"> Show </a>
                                <a  href="{{ route('admin.role.edit', $role->id) }}"  class="btn btn-primary"> Edit </a>
                                <form class="d-inline" method="post" action="{{ route('admin.role.destroy', $role->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete?')" class="btn btn-danger"> Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>
@stop()

@extends('admin.layouts.admin.master')
@section('main')

    <div class="col-md-9 main_right">
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>{{ __('role.list') }}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.role.create') }}">{{ __('role.add') }}</a> </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">{{ __('role.user') }}</th>
                    <th style="width: 10%;" scope="col">ID</th>
                    <th style="width: 30%;" scope="col">{{ __('role.name') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('role.per') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('role.action') }}</th>
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
                                <a href="{{ route('admin.role.show', $role->id) }}" class="btn btn-success"> {{ __('role.show') }} </a>
                                <a  href="{{ route('admin.role.edit', $role->id) }}"  class="btn btn-primary"> {{ __('role.edit') }} </a>
                                <form class="d-inline" method="post" action="{{ route('admin.role.destroy', $role->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete?')" class="btn btn-danger"> {{ __('role.delete') }} </button>
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

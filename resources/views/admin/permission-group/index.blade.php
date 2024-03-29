@extends('admin.layouts.admin.master')
@section('main')

    <div class="container-fluid">
        <table class="table table-bordered table-all">
            <div class="row">
                <div class="col-md-2">
                    <p><span>{{ __('permission_group.list') }}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.permission-group.create') }}">{{ __('permission_group.add') }}</a> </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">{{ __('permission_group.user') }}</th>
                    <th style="width: 30%;" scope="col">Id</th>
                    <th style="width: 30%;"scope="col">{{ __('permission_group.name') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('permission_group.action') }}</th>
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
                                    class="btn btn-primary"> {{ __('permission_group.edit') }} </a>
                                <form class="d-inline" method="post"
                                    action="{{ route('admin.permission-group.destroy', $permissionGroup->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> {{ __('permission_group.delete') }} </button>
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

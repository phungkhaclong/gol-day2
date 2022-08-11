@extends('admin.layouts.admin.master')
@section('main')

    <div class="col-md-9 main_right">
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>{{ __('per-group.list') }}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.permission-group.create') }}">{{ __('per-group.add') }}</a> </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">{{ __('per-group.user') }}</th>
                    <th style="width: 30%;" scope="col">Id</th>
                    <th style="width: 30%;"scope="col">{{ __('per-group.name') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('per-group.action') }}</th>
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
                                    class="btn btn-primary"> {{ __('per-group.edit') }} </a>
                                <form class="d-inline" method="post"
                                    action="{{ route('admin.permission-group.destroy', $permissionGroup->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> {{ __('per-group.delete') }} </button>
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

@extends('admin.layouts.admin.master')
@section('main')
    <div class="col-md-9 main_right">
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <p style="font-weight: bold;"> Showing Role: </p>
                <div>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            @if (!empty($role))
                <div class="container-fluid">
                    <p>
                        ID: {{ $role->id }}
                    </p>
                    <p>
                        Name: {{ $role->name }}
                    </p>
                    @php
                        $selected = collect([]);
                        if (!empty($role)) {
                            $selected = $role->permissions;
                        }
                        if (!empty($selected)) {
                            $permissionGroups = [];
                            foreach ($selected as $permission) {
                                if (!in_array($permission->permissionGroup, $permissionGroups)) {
                                    array_push($permissionGroups, $permission->permissionGroup);
                                }
                            }
                        }
                    @endphp
                    <p class="form-label"> Permission Groups: </p>
                    <div class="container-fluid px-0 mt-3">
                        @if (!empty($permissionGroups))
                            @foreach ($permissionGroups as $permissionGroup)
                                <div class="container-fluid border rounded my-2 px-0 py-3 bg-white shadow-sm">
                                    <div class="container-fluid">
                                        <p class="form-label"> {{ $permissionGroup->name }} </p>
                                    </div>
                                    <hr>
                                    <div class="container-fluid">
                                        @if (!empty($permissionGroup->permissions))
                                            @foreach ($permissionGroup->permissions as $permission)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="permission_ids[]"
                                                        id="{{ 'chkbox_' . $permissionGroup->id . '_' . $permission->id }}"
                                                        value="{{ $permission->id }}"{{ $selected->contains($permission->id) ? ' checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="{{ 'chkbox_' . $permissionGroup->id . '_' . $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <p>
                        Created at: {{ $role->created_at }}
                    </p>
                    <p>
                        Updated at: {{ $role->updated_at }}
                    </p>
                </div>

                <div class="row mt-3">
                    <div class="d-flex justify-content-center">
                        <div>
                            <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-primary"> Edit </a>
                        </div>
                        <div>
                            <form class="d-inline" method="post" action="{{ route('admin.role.destroy', $role->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop()
